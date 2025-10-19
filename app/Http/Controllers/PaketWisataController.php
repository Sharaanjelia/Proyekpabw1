<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketWisataController extends Controller
{
    public function index()
    {
        $paketWisata = [
            [
                'nama' => 'Barusan Hills',
                'durasi' => '3 Hari 2 Malam',
                'harga' => 'Rp2.000.000',
                'diskon' => '20%',
                'gambar' => 'barusen_hills.jpg',
                'rating' => 5
            ],
            [
                'nama' => 'Ciwidey Valley',
                'durasi' => '2 Hari 1 Malam',
                'harga' => 'Rp1.500.000',
                'diskon' => '15%',
                'gambar' => 'ciwidey_valley.jpg',
                'rating' => 4
            ],
            [
                'nama' => 'Tafso Barn',
                'durasi' => '2 Hari 1 Malam',
                'harga' => 'Rp1.000.000',
                'diskon' => '15%',
                'gambar' => 'tafsor_barn.jpg',
                'rating' => 4
            ],
            [
                'nama' => 'Orchid Forest',
                'durasi' => '2 Hari 1 Malam',
                'harga' => 'Rp1.200.000',
                'diskon' => '30%',
                'gambar' => 'orchid_forest.jpg',
                'rating' => 5
            ],
            [
                'nama' => 'Kampung Cai',
                'durasi' => '2 Hari 1 Malam',
                'harga' => 'Rp1.300.000',
                'diskon' => '18%',
                'gambar' => 'kampung_cai.webp',
                'rating' => 4
            ],
        ];

        return view('paket_wisata', compact('paketWisata'));
    }
}
