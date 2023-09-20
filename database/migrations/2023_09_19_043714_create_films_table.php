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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('director');
            $table->string('cast');
            $table->integer('minimal_usia');
            $table->string('genre');
            $table->string('durasi');
            $table->date('jadwal_tayang');
            $table->string('trailer');
            $table->text('sinopsis');
            $table->enum('status',['nowplaying','commingsoon','finish'])->default('commingsoon');
            $table->string('thumbnile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};