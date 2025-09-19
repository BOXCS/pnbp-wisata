<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('cultures')->get()->each(function ($culture) {
            $name = json_decode($culture->name, true) ?? [];
            $description = json_decode($culture->description, true) ?? [];

            // tambahkan key kosong kalau belum ada
            foreach (['en', 'es', 'zh'] as $locale) {
                if (! array_key_exists($locale, $name)) {
                    $name[$locale] = null;
                }
                if (! array_key_exists($locale, $description)) {
                    $description[$locale] = null;
                }
            }

            DB::table('cultures')
                ->where('id', $culture->id)
                ->update([
                    'name' => json_encode($name),
                    'description' => json_encode($description),
                ]);
        });
    }

    public function down(): void
    {
        // rollback: hapus key selain id
        DB::table('cultures')->get()->each(function ($culture) {
            $name = json_decode($culture->name, true) ?? [];
            $description = json_decode($culture->description, true) ?? [];

            $name = ['id' => $name['id'] ?? null];
            $description = ['id' => $description['id'] ?? null];

            DB::table('cultures')
                ->where('id', $culture->id)
                ->update([
                    'name' => json_encode($name),
                    'description' => json_encode($description),
                ]);
        });
    }
};
