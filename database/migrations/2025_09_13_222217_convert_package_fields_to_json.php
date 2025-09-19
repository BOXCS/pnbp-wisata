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
        Schema::table('packages', function (Blueprint $table) {
            $table->json('name_trans')->nullable()->after('name');
            $table->json('description_trans')->nullable()->after('description');
            $table->json('price_trans')->nullable()->after('price');
        });

        // 2. Copy data lama → JSON (default "id")
        DB::table('packages')->get()->each(function ($pkg) {
            DB::table('packages')
                ->where('id', $pkg->id)
                ->update([
                    'name_trans'        => json_encode(['id' => $pkg->name]),
                    'description_trans' => json_encode(['id' => $pkg->description]),
                    'price_trans'       => json_encode([
                        'id' => $pkg->price,   // IDR
                        'en' => null,          // USD
                        'zh' => null,          // Yuan
                        'es' => null,          // bisa pakai Euro atau MXN, sesuaikan
                    ]),
                ]);
        });

        // 3. Hapus kolom lama
        Schema::table('packages', function (Blueprint $table) {
            $table->dropColumn(['name', 'description', 'price']);
        });

        // 4. Rename JSON kolom baru ke nama asli
        Schema::table('packages', function (Blueprint $table) {
            $table->renameColumn('name_trans', 'name');
            $table->renameColumn('description_trans', 'description');
            $table->renameColumn('price_trans', 'price');
        });
    }

    public function down(): void
    {
        // Balik ke struktur lama
        Schema::table('packages', function (Blueprint $table) {
            $table->string('name')->change();
            $table->text('description')->nullable()->change();
            $table->decimal('price', 12, 2)->nullable()->change();
        });
    }
};
