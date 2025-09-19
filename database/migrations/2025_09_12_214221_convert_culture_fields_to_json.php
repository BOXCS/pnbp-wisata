<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Tambah kolom baru sementara (JSON)
        Schema::table('cultures', function (Blueprint $table) {
            $table->json('name_trans')->nullable()->after('name');
            $table->json('description_trans')->nullable()->after('description');
        });

        // 2. Copy data lama ke kolom JSON (set sebagai bahasa default: id)
        DB::table('cultures')->get()->each(function ($culture) {
            DB::table('cultures')
                ->where('id', $culture->id)
                ->update([
                    'name_trans' => json_encode(['id' => $culture->name]),
                    'description_trans' => json_encode(['id' => $culture->description]),
                ]);
        });

        // 3. Hapus kolom lama & rename kolom baru
        Schema::table('cultures', function (Blueprint $table) {
            $table->dropColumn(['name', 'description']);
        });

        Schema::table('cultures', function (Blueprint $table) {
            $table->renameColumn('name_trans', 'name');
            $table->renameColumn('description_trans', 'description');
        });
    }

    public function down(): void
    {
        // Balik lagi ke string (jaga-jaga rollback)
        Schema::table('cultures', function (Blueprint $table) {
            $table->string('name')->change();
            $table->text('description')->nullable()->change();
        });
    }
};

