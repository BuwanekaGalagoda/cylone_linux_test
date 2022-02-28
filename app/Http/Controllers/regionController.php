<?php

namespace App\Http\Controllers;

use App\Models\region;
use Illuminate\Http\Request;

class regionController extends Controller
{
    public function index()
   {
       $region = region::latest()->paginate(5);
       return view('region.index',compact('region'));
            // ->with('i' (request()->input('page', 1) - 1) * 5);
   }

   public function create()
   {
       return view('region.create');
   }

   public function store(Request $request)
   {
       $request->validate([
           'rname'=>'required',
       ]);

       region::create($request->all());

       return redirect()->route('region.index')
       ->with('success','region created successfully.');
   }
   public function show(region $region)
   {
       return view('region.show',compact('region'));
   }

   public function edit(region $region)
   {
       return view('regione.edit',compact('region'));
   }

   public function update(Request $request,region $region)
   {
       $request->validate([

       ]);

       $region->update($request->all());

       return redirect()->route('region.index')
       ->with('success','region updated successfully.');
   }

   public function destroy(region $region)
   {
       $region->delete();

       return redirect()->route('region.index')
       ->with('success','region deleted successfully.');
   }
}
