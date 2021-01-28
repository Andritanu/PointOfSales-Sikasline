<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->level == "ADMIN"){
            return redirect('/barang');
        }elseif (Auth::user()->level == "KASIR"){
            return redirect('/transaksi');
        }elseif (Auth::user()->level == "MANAGER"){
            return redirect('/laporan');
        };
        return view('home');
    }
}
