<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // ini untuk judul berita
            $table->string('author'); // ini untuk penulis berita
            $table->string('description'); // ini untuk deskripsi berita
            $table->text('content'); // ini untuk konten berita
            $table->string('url'); // ini untuk URL berita
            $table->string('url_image'); //ini untuk URL image berita
            $table->dateTime('published_at'); //ini untuk waktu publish berita
            $table->string('category'); //ini untuk katagori berita
            $table->timestamps(); // ini untuk timestampnya
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
