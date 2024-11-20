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
        Schema::create('mapel_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('siswa_id',64)->references('id')->on('siswa');
            $table->string('mapel_id',64)->references('id')->on('mapel');
            $table->string('nilai',64);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapel_siswa');
    }
};
