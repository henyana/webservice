<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sparepart;

class SparepartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sparepart1 = new Sparepart;
        $sparepart1->nama_sparepart = 'Sparepart 1';
        $sparepart1->minimal_stok = 5;
        $sparepart1->stok = 100;
        $sparepart1->save();

        $sparepart2 = new Sparepart;
        $sparepart2->nama_sparepart = 'Sparepart 2';
        $sparepart2->minimal_stok = 5;
        $sparepart2->stok = 200;
        $sparepart2->save();

        $sparepart3 = new Sparepart;
        $sparepart3->nama_sparepart = 'Sparepart 3';
        $sparepart3->minimal_stok = 5;
        $sparepart3->stok = 300;
        $sparepart3->save();

        $sparepart4 = new Sparepart;
        $sparepart4->nama_sparepart = 'Sparepart 4';
        $sparepart4->minimal_stok = 5;
        $sparepart4->stok = 400;
        $sparepart4->save();

        $sparepart5 = new Sparepart;
        $sparepart5->nama_sparepart = 'Sparepart 5';
        $sparepart5->minimal_stok = 5;
        $sparepart5->stok = 500;
        $sparepart5->save();

    }
}
