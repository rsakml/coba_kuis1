<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier')->insert([
            [
            'gambar' => 'Niagahoster.png',
            'nama' => 'Niagahoster',
            'jenis' => 'Hosting unlimited, Cloud hosting, Wordpress hosting, Email hosting, VPS, Pembuatan website, Domain',
            'email' => 'niagahost@gmail.com'
            ],
            [
            'gambar' => 'Domainesia.png',
            'nama' => 'Domainesia',
            'jenis' => 'Hosting, Cloud VPS, Domain',
            'email' => 'domainesia@gmail.com'
            ],
            [
            'gambar' => 'Ardetamedia.png',
            'nama' => 'Ardetamedia',
            'jenis' => 'Unlimited hosting, Semi dedicated hosting, Cloud hosting, VPS, Dedicated server, Email, Domain',
            'email' => 'ardetamedia@gmail.com'
            ],
            [
            'gambar' => 'Warnahost.png',
            'nama' => 'Warnahost',
            'jenis' => 'Hosting unlimited, Wordpres hosting, Cloud hosting, VPS, Dedicated server, Jasa managed server, Jasa pembuatan web, Domain',
            'email' => 'warnahost@gmail.com'
            ],
            [
            'gambar' => 'Idcloudhost.png',
            'nama' => 'Idcloudhost',
            'jenis' => 'Cloud hosting, Wordpress hosting, Cloud VPS, Dedicated server, Colocation server, Domain',
            'email' => 'idCloud@gmail.com'
            ],
            [
            'gambar' => 'Jetorbit.png',
            'nama' => 'Jetorbit',
            'jenis' => 'Shared hosting, VPS, Wordpress hosting, Email hosting, Dedicated server, Domain',
            'email' => 'jetorbit@gmail.com'
            ],
            [
            'gambar' => 'Dracoola Multimedia.png',
            'nama' => 'Dracoola Multimedia',
            'jenis' => 'Shared hosting, Domain',
            'email' => 'dracoola@gmail.com'
            ],
            [
            'gambar' => 'Nusantarahost.png',
            'nama' => 'Nusantarahost',
            'jenis' => 'Shared hosting, E-Learning hosting, VPS, Dedicated server, Domain',
            'email' => 'nusantara@gmail.com'
            ],
            [
            'gambar' => 'Jogjahost.png',
            'nama' => 'Jogjahost',
            'jenis' => 'Shared hosting, Semi dedicated hosting, Dedicated hosting, VPS, Dedicated server, E-learning CBT, Domain',
            'email' => 'jogjahost@gmail.com'
            ],
            [
            'gambar' => 'Domosquare.png',
            'nama' => 'Domosquare',
            'jenis' => 'Shared hosting, VPS, Dedicated server, Domain',
            'email' => 'domosquare@gmail.com'
            ]

            ]);
    }
}
