<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function barang()
    {
        return $this ->belongsTo(Barang::class, 'kd_barang');
    }
    public function user()
    {
        return $this ->belongsTo(User::class, 'kd_user');
    }
    protected $table = 'tbl_transaksi';
    protected $primaryKey = 'kd_transaksi';
    protected $fillable = [
        'kd_transaksi', 'uang', 'kd_barang','status', 'jumlah_barang', 'kembalian', 'total_harga', 'tanggal_beli'
    ];
}
