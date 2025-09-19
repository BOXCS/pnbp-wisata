<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Tambah kolom JSON sementara
        Schema::table('facilities', function (Blueprint $table) {
            $table->json('name_trans')->nullable()->after('name');
            $table->json('type_trans')->nullable()->after('type');
            $table->json('description_trans')->nullable()->after('description');
        });

        // 2. Copy data lama → JSON (default "id")
        DB::table('facilities')->get()->each(function ($facility) {
            DB::table('facilities')
                ->where('id', $facility->id)
                ->update([
                    'name_trans'        => json_encode(['id' => $facility->name]),
                    'type_trans'        => json_encode(['id' => $facility->type]),
                    'description_trans' => json_encode(['id' => $facility->description]),
                ]);
        });

        // 3. Hapus kolom lama
        Schema::table('facilities', function (Blueprint $table) {
            $table->dropColumn(['name', 'type', 'description']);
        });

        // 4. Rename JSON kolom baru ke nama asli
        Schema::table('facilities', function (Blueprint $table) {
            $table->renameColumn('name_trans', 'name');
            $table->renameColumn('type_trans', 'type');
            $table->renameColumn('description_trans', 'description');
        });
    }

    public function down(): void
    {
        // Balik ke struktur lama
        Schema::table('facilities', function (Blueprint $table) {
            $table->string('name')->change();
            $table->string('type')->nullable()->change();
            $table->text('description')->nullable()->change();
        });
    }
};
