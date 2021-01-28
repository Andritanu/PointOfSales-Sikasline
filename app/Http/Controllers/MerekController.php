<?php
  
namespace App\Http\Controllers;
  
use App\Merek;
use Illuminate\Http\Request;
  
class MerekController extends Controller
{
   
    public function index()
    {
        $merek = Merek::latest()->paginate(5);
  
        return view('merek.index',compact('merek'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
  
    public function create()
    {
        return view('merek.create');
    }
  
   
    public function store(Request $request)
    {
        $request->validate([
           
            'merek' => 'required',
        ]);
  
        Merek::create($request->all());
   
        return redirect()->route('merek.index')
                        ->with('success','Brand created successfully.');
    }
   
   
    public function show(Merek $merek)
    {
        return view('merek.show',compact('merek'));
    }
   
    
    public function edit(Merek $merek)
    {
        return view('merek.edit',compact('merek'));
    }
  
    
    public function update(Request $request, Merek $merek)
    {
        $request->validate([
            
            'merek' => 'required',
        ]);
  
        $merek->update($request->all());
  
        return redirect()->route('merek.index')
                        ->with('success','Merek updated successfully');
    }
  
    
    public function destroy(Merek $merek)
    {
        $merek-> delete();
  
        return redirect()->route('merek.index')
                        ->with('success','Merek deleted successfully');
    }
}