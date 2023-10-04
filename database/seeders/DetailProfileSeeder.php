<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert data ke table pegawai
        DB::table('detail_profile')->insert([
            'address' => 'Jember', // alamat yang akan dimasukkan
            'no_tlp' => '082123123123', // nomor telepon yang akan dimasukkan
            'ttl' => '2000-11-25', // tanggal lahir (ttl) yang akan dimasukkan
            'foto' => 'picture.png', // file foto yang akan dimasukkan
        ]);
    }
}
