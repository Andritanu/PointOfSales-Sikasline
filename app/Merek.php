<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
 
    public function barang(){
        return $this->hasMany(Barang::class);
    }

    protected $table = 'tbl_merek';
    protected $primaryKey = 'kd_merek';
    protected $fillable = [
        'kd_merek', 'merek'
    ];
}
