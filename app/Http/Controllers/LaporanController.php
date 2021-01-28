<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;
use Auth;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::latest()->paginate(5);
        return view('laporan.index',compact('transaksi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show()
	{
		return Excel::download(new LaporanExport, 'laporan.xlsx');
	}
}
