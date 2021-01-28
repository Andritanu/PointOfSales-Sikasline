<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use Auth;
use App\Exports\LaporbrgExport;
use Maatwebsite\Excel\Facades\Excel;

class LaporbrgController extends Controller
{
    public function index()
    {
        $barang = Barang::latest()->paginate(5);
        return view('laporbrg.index',compact('barang'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show()
	{
		return Excel::download(new LaporbrgExport, 'laporbrg.xlsx');
	}
}
