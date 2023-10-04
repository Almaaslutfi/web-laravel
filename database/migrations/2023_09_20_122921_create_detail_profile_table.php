<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
    Schema::create('detail_profile', function (Blueprint $table) {
        $table->bigIncrements('id'); // kolom ID yang bernilai unik.
        $table->string('address'); // kolom untuk menyimpan alamat.
        $table->string('no_tlp'); // kolom untuk menyimpan nomor telepon.
        $table->date('ttl'); // kolom untuk menyimpan tanggal lahir.
        $table->string('foto'); // kolom untuk menyimpan nama file foto profil.
        $table->timestamps(); // kolom untuk timestamp pembuatan dan pembaruan.
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_profile');
    }
};
