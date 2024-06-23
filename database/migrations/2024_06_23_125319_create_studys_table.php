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
        Schema::create('studys', function (Blueprint $table) {
            $table->id(); // Kolom id sebagai primary key
            $table->foreignId('id_kategori')->constrained('categorys')->onDelete('cascade');
            // $table->unsignedBigInteger('id_kategori');
            $table->string('nama');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('file');
            $table->timestamps();

            // Set foreign key constraint
            $table->foreign('id')->references('id')->on('categorys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studys');
    }
};