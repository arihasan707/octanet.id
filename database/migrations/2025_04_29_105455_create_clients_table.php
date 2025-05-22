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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('produk_id');
            $table->foreign('produk_id')->references('id')->on('products');
            $table->string('nama');
            $table->string('nik');
            $table->string('email');
            $table->date('tgl_lahir');
            $table->string('no_hp1');
            $table->string('no_hp2');
            $table->date('tgl_pasang');
            $table->text('alamat');
            $table->string('long');
            $table->string('lat');
            $table->string('img');
            $table->enum('status', ['proses', 'ditolak', 'aktif', 'terblokir', 'berhenti', 'suspend'])->default('proses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
