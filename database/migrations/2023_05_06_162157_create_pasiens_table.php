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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('ncm')->unique();
            $table->string('nama_pasien');
            $table->integer('nik')->unique();
            $table->datetime('tgl_lahir');
            $table->integer('berat_badan');
            $table->integer('tinggi_badan');
            $table->integer('imt');
            $table->integer('no_hp');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
