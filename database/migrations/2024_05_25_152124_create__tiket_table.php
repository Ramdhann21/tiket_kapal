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
        Schema::create('_tiket', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->integer('NIK');
            $table->date('Tanggal_Lahir');
            $table->string('Alamat_Email');
            $table->integer('NO_Telephone');
            $table->string('Jumlah_Penumpang');
            $table->string('Tujuan');
            $table->string('Jenis_Kelamin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_tiket');
    }
};
