<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailtransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transactions', function (Blueprint $table) {
           $table->id();
           $table->integer('jumlah');
           $table->timestamps();

           $table->foreignId('id_transaksi');
           $table->foreign('id_transaksi')->references('id')->on('transactions')->onDelete('cascade');
           
           $table->foreignId('id_sparepart');
           $table->foreign('id_sparepart')->references('id')->on('spareparts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailtransactions');
    }
}
