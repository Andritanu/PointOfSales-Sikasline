<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\Barang;
use App\User;
use App\Detail;
use App\Detail_View;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TransaksiController extends Controller
{
    
    public function index()
    {
        $check = Transaksi::where('status', 'belum')->first();

        if ($check == null) {
        Transaksi::create([
        'uang' => 0,
        'total_harga' => 0,
        'status' => 'belum',
        'total_barang' => 0,
        'kembalian' => 0,
        'tanggal_beli' => Carbon::now()
        ]);

        $check = Transaksi::where('status', 'belum')->first();
        }

        $total = Detail::where('kd_transaksi', $check->kd_transaksi)->sum('total_barang');

        $barang = Barang::all();
        $transaksi = Detail_View::where('kd_transaksi', $check->kd_transaksi)->get();
  
        // dd($transaksi);
        return view('transaksi.index',compact('transaksi','barang','check','total'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function create()
    {
        $barang = Barang::all();
        $user = User::all();
        return view('transaksi.create',compact('barang','user'));
    }

    
    public function store(Request $request)
    {
        
        $barangData = Barang::where('kd_barang',$request->id_barang)->first();
        // dd($barangData);
        // dd($request->all());

        if ($request->jumlah_beli > $barangData->stok_barang ) {
            return redirect('/transaksi')
            ->with('error','Barang tidak cukup.');
            } elseif($request->jumlah_beli <= 0 ){
                return redirect('/transaksi')->with('error','Jumlah harus lebih dari 0');
                }else{
                    
                    Detail::create([
            
                        'kd_transaksi' => $request->kd_transaksi,
                        'kd_barang' => $request->id_barang,
                        'jumlah_beli' => $request->jumlah_beli,
                        'total_barang' =>$request->jumlah_beli * $barangData->harga_barang,
                    ]);

                // $transaksi->save();
                $barangData->stok_barang = $barangData->stok_barang - $request->jumlah_beli;
                $barangData->save();        
            }

  
        return redirect()->route('transaksi.index')
                        ->with('success','Transaksi created successfully.');
    }

   
    public function edit(Transaksi $transaksi)
    {
        $barang = Barang::all();
        $user = User::all();
        return view('transaksi.edit',compact('transaksi','barang','user'));
    }

   
    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            
           
            'jumlah_barang' => 'required',
            'tanggal_beli' => 'required',
        ]);
        
        $barangData = Barang::where('kd_barang','=',$request->kd_barang)->first();
        $data = $request->all();
        $data['total_harga'] = $request->jumlah_barang * $barangData->harga_barang;
        
        $transaksi->update($data);
  
        return redirect()->route('transaksi.index')
                        ->with('success','Updated successfully');
    }

    
    public function destroy($transaksi)
    {

        $a = Detail::find($transaksi);

        $brg = Barang::find($a->kd_barang);

        // dd($brg);
        Barang::find($a->kd_barang)->update([
            'stok_barang' => $brg->stok_barang + $a->jumlah_beli
        ]);

        
        Detail::find($transaksi)->delete();
  
        return redirect()->route('transaksi.index')
                        ->with('success','Deleted successfully');
    }

    public function bayar(Request $request, $id)
    {
        $data = $request->all();
        // dd($data);
        $data['kembalian'] = $request->uang - $request->total;

        if ($request->uang < $request->total) {
            return redirect()->route('transaksi.index')->with('error','Uang kurang.');
        } else {
            
            $a = Transaksi::find($id)->update([
                'status' => 'bayar',
                'total_harga' => $request->total,
                'uang' => $request->uang,
                'kembalian' => $data['kembalian'],
                'tanggal_beli' => Carbon::now()
            ]);
        }
        return redirect('/transaksi');
    }
}
