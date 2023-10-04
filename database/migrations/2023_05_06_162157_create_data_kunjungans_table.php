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
        Schema::create('data_kunjungans', function (Blueprint $table) {
            $table->id();
            $table->string('id_pasien');
            $table->integer('suspect');
            $table->integer('diagnosa');
            $table->integer('diet');
            $table->string('tgl_kunjungan');
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
