<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Barang;

class LaporbrgExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Barang::all();
    }
    public function headings():array
    {
        return['kd barang',
               'nama barang',
               'harga beli',
               'merek',
               'nama distributor',
               'tanggal masuk',
               'harga barang',
               'stok barang',
               'keterangan',
            'created at',
        'update at'];
    }
}
