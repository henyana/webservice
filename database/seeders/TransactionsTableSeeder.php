<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\DetailTransaction;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $transaction1 = new Transaction;
        $transaction1->no_transaksi = 1;
        $transaction1->nama_pemohon = 'Pemohon Test1';
        $transaction1->id_user = 1;
        $transaction1->save();

        $detail_transaction1 = new DetailTransaction;
        $detail_transaction1->id_transaksi = 1;
        $detail_transaction1->id_sparepart = 1;
        $detail_transaction1->jumlah = 10;
        $detail_transaction1->save();
    }
}
