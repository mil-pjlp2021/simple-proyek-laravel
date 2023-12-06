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
            $table->string('nama');
            $table->unsignedInteger('kuantitas');
            $table->unsignedInteger('harga');
            $table->unsignedInteger('subtotal');
            $table->unsignedBigInteger('tagihan_id');
            $table->timestamps();
            $table->foreign('tagihan_id')->references('id')->on('tagihans');
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
