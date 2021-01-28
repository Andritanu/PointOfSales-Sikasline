<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{

    public function merek()
    {
        return $this ->belongsTo(Merek::class, 'kd_merek');
    }
    public function distributor()
    {
        return $this ->belongsTo(Distributor::class, 'kd_distributor');
    }

    protected $table = 'tbl_barang';
    protected $primaryKey = 'kd_barang';
    protected $fillable = [
        'kd_barang', 'nama_barang', 'harga_beli', 'kd_merek', 'kd_distributor', 'tanggal_masuk', 'harga_barang', 'stok_barang', 'keterangan'
    ];
}
