<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('upload_links', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // judul opsional
            $table->string('image')->nullable(); // path image
            $table->text('link')->nullable();    // link embed (YT, IG, dll)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('upload_links');
    }
};
