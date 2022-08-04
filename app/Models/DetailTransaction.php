<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'jumlah',
    ];

    protected $table = 'detail_transactions';

    public function transaction()
    {
        return $this->belongsTo(Transaction::class,'id_transaksi');
    }

    public function sparepart()
    {
        return $this->belongsTo(Sparepart::class,'id_sparepart');
    }

}
