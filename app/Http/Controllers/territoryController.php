<?php

namespace App\Http\Controllers;

use App\Models\territory;
use App\Models\region;
use App\Models\zone;
use Illuminate\Http\Request;

class territoryController extends Controller
{
   public function index()
   {
    
       $territory = territory::latest()->paginate(5);
       return view('territory.index',compact('territory'));
            // ->with('i' (request()->input('page', 1) - 1) * 5);
        
        // fetch start
         // Fetch zone
       $zone['data'] = zone::orderby("ldes","sdes")
       ->select('id','sdes')
       ->get();

 // Load index view
 return view('index')->with("zone",$zone);
    }

// Fetch records
public function getregion($region=0)
{

 // Fetch name by region
 $terdata['data'] = region::orderby("rname","id")
    ->select('rid','rname')
    ->where('region',$region)
    ->get();

 return response()->json($terdata);
        // fetch end
        }
   

   public function create()
   {
       return view('territory.create');
   }

   public function store(Request $request)
   {
       $request->validate([
           'zid '=>'required',
           'rid '=>'required',
           'tcode'=>'required',
           'tname'=>'required',
       ]);

       territory::create($request->all());

       return redirect()->route('territory.index')
       ->with('success','territory created successfully.');
   }
   public function show(territory $territory)
   {
       return view('territory.show',compact('territory'));
   }

   public function edit(territory $territory)
   {
       return view('territory.edit',compact('territory'));
   }

   public function update(Request $request,territory $territory)
   {
       $request->validate([

       ]);

       $territory->update($request->all());

       return redirect()->route('territory.index')
       ->with('success','territory updated successfully.');
   }

   public function destroy(territory $territory)
   {
       $territory->delete();

       return redirect()->route('territory.index')
       ->with('success','territory deleted successfully.');
   }
}
