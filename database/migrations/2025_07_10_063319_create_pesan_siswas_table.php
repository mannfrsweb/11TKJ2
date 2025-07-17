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
        Schema::create('pesan_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengirim');
            $table->string('nama_tujuan');
            $table->text('pesan_kesan')->nullable();
            $table->text('target_selanjutnya')->nullable();
            $table->text('pesan_pkl')->nullable();
            $table->text('pesan_sekolah')->nullable();
            $table->text('saran_tkj2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesan_siswas');
    }
};
