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
        //Schema::create('detailtransactions', function (Blueprint $table) {
        //    $table->id();
        //    $table->foreign('id_transaksi')->references('id')->on('transactions');
        //    $table->foreign('id_sparepart')->references('id')->on('spareparts');
        //    $table->integer('jumlah');
        //    $table->timestamps();
        //});
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
