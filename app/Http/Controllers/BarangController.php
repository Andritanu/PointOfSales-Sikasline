<?php
  
namespace App\Http\Controllers;
  
use App\Barang;
use Illuminate\Http\Request;
use App\Merek;
use App\Distributor;
class BarangController extends Controller
{
   
    public function index()
    {
        $barang = Barang::latest()->paginate(5);
        $merek = Merek::all();
        $distributor = Distributor::all();
        return view('barang.index',compact('barang', 'merek', 'distributor'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
  
    public function create()
    {
        $merek = Merek::all();
        $distributor = Distributor::all();
        return view('barang.create',compact('merek','distributor'));
    }
  
   
    public function store(Request $request)
    {
        $request->validate([

            'nama_barang' => 'required',
            'kd_merek' => 'required',
            'kd_distributor' => 'required',
            'tanggal_masuk' => 'required',
            'harga_barang' => 'required',
            'stok_barang' => 'required',
            'keterangan' => 'required',
        ]);
  
        Barang::create($request->all());
   
        return redirect()->route('barang.index')
                        ->with('success','Item created successfully.');
    }
   
   
    public function show(Barang $barang)
    {
        return view('barang.show',compact('barang'));
    }
   
    
    public function edit(Barang $barang)
    {
        $merek = Merek::all();
        $distributor = Distributor::all();
        return view('barang.edit',compact('barang','merek','distributor'));
    }
    
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kd_merek' => 'required',
            'kd_distributor' => 'required',
            'tanggal_masuk' => 'required',
            'harga_barang' => 'required',
            'stok_barang' => 'required',
            'keterangan' => 'required',
        ]);
  
        $barang->update($request->all());
  
        return redirect()->route('barang.index')
                        ->with('success','Barang updated successfully');
    }
  
    
    public function destroy(Barang $barang)
    {
        $barang-> delete();
  
        return redirect()->route('barang.index')
                        ->with('success','Barang deleted successfully');
    }
}