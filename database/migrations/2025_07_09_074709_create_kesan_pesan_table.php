<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('kesan_pesan', function (Blueprint $table) {
        $table->id();
        $table->string('nama'); // nama wali atau ketua
        $table->string('sebagai'); // wali kelas / ketua kelas
        $table->text('kesan')->nullable();
        $table->text('pesan')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesan_pesan');
    }
};
