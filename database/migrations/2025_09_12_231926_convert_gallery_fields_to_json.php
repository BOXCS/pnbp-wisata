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
        Schema::table('gallery_categories', function (Blueprint $table) {
            $table->json('name_trans')->nullable()->after('name');
        });

        // 2. Copy data lama ke kolom JSON (set sebagai bahasa default: id)
        DB::table('gallery_categories')->get()->each(function ($culture) {
            DB::table('gallery_categories')
                ->where('id', $culture->id)
                ->update([
                    'name_trans' => json_encode([
                        'id' => $culture->name,
                        'en' => null,
                        'es' => null,
                        'zh' => null,
                    ]),
                ]);
        });

        // 3. Hapus kolom lama & rename kolom baru
        Schema::table('gallery_categories', function (Blueprint $table) {
            $table->dropColumn(['name']);
        });

        Schema::table('gallery_categories', function (Blueprint $table) {
            $table->renameColumn('name_trans', 'name');
        });
    }

    public function down(): void
    {
        // Balik lagi ke string (jaga-jaga rollback)
        Schema::table('gallery_categories', function (Blueprint $table) {
            $table->string('name')->change();
        });
    }
};
