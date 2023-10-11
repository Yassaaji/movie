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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ticket_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('bank_id')->nullable()->constrained();
            $table->foreignId('ewallet_id')->nullable()->constrained();
            $table->foreignId('film_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constarined();
            $table->integer('totalharga');
            $table->string('bukti_pembayaran')->nullable();
            $table->enum('konfirmasi',['ditolak','menunggu','sukses'])->default('menunggu');
            $table->string('alasan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
