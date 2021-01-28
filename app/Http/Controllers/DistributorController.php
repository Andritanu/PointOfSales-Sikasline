<?php
  
namespace App\Http\Controllers;
  
use App\Distributor;
use Illuminate\Http\Request;
  
class DistributorController extends Controller
{
   
    public function index()
    {
        $distributor = Distributor::latest()->paginate(5);
  
        return view('distributor.index',compact('distributor'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
  
    public function create()
    {
        return view('distributor.create');
    }
  
   
    public function store(Request $request)
    {
        $request->validate([
            'nama_distributor' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);
  
        Distributor::create($request->all());
   
        return redirect()->route('distributor.index')
                        ->with('success','Distributor created successfully.');
    }
   
   
    public function show(Distributor $distributor)
    {
        return view('distributor.show',compact('distributor'));
    }
   
    
    public function edit(Distributor $distributor)
    {
        return view('distributor.edit',compact('distributor'));
    }
  
    
    public function update(Request $request, Distributor $distributor)
    {
        $request->validate([
            'nama_distributor' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);
  
        $distributor->update($request->all());
  
        return redirect()->route('distributor.index')
                        ->with('success','Distributor updated successfully');
    }
  
    
    public function destroy(Distributor $distributor)
    {
        $distributor-> delete();
  
        return redirect()->route('distributor.index')
                        ->with('success','Distributor deleted successfully');
    }
}