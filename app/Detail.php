<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
   
    protected $table = 'detail_transaksi';
    protected $fillable = [
        'id', 'kd_transaksi', 'kd_barang', 'jumlah_beli', 'total_barang'
    ];
}
