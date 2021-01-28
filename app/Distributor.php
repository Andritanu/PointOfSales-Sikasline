<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{

    public function barang(){
        return $this->hasMany(Barang::class);
    }
    protected $table = 'tbl_distributor';
    protected $primaryKey = 'kd_distributor';
    protected $fillable = [
        'kd_distributor', 'nama_distributor', 'alamat', 'no_telp'
    ];
}
