<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::insert([
        [   'nama'      => 'Tunik Mega Mendung Merah',
            'gambar'    => 'tunik-mm-merah.jpg',
            'harga'     => '558000',
            'stok'      => '2',
            'keterangan'=> 'Tunik eksklusif ini dibuat dengan kain katun yang dipilih dengan hati-hati dan dibatik dengan 2x proses pembatikan secara tulis, menawarkan kualitas tinggi dan penampilan tanpa cacat.'
        ],

        [   'nama'      => 'Tunik Mega Mendung Comb Garis',
            'gambar'    => 'tunik-mm-comb-garis.jpg',
            'harga'     => '854000',
            'stok'      => '4',
            'keterangan'=> 'Tunik dengan detail motif batik tulis mega mendung untuk tampilan casual dan formal look.'
        ],

        [   'nama'      => 'Outer Batik Bolero Perca - Biru',
            'gambar'    => 'Outer-Batik-Bolero-Perca-Biru.jpg',
            'harga'     => '333000',
            'stok'      => '3',
            'keterangan'=> 'Bahan : Katun Premium Jenis Batik : Batik Tulis Mega Mendung  Warna : Biru.'
        ],

        [   'nama'      => 'Blus Batik Wanita Comb Mix Mega Mendung - Pink Putih',
            'gambar'    => 'Comb-Mix-Mega-Mendung-Pink-Putih.jpg',
            'harga'     => '214000',
            'stok'      => '2',
            'keterangan'=> 'Bahan : Katun Premium Jenis Batik : Cap Motif : Mega Mendung Warna : Pink Putih'
        ],

    ]);
    }
}
