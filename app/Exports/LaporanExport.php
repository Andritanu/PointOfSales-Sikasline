<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Transaksi;

class LaporanExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Transaksi::all();
    }
    public function headings():array
    {
        return['kd transaksi',
               'status',
               'uang',
               'total harga',
               'kembalian',
               'tanggal beli',
               'created at',
               'update at'];
    }
}
