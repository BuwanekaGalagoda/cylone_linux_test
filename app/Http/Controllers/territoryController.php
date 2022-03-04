<?php

namespace App\Http\Controllers;

use App\Models\territory;
use Illuminate\Http\Request;

class territoryController extends Controller
{
   public function index()
   {
       $territory = territory::latest()->paginate(5);
       return view('territory.index',compact('territory'));
            // ->with('i' (request()->input('page', 1) - 1) * 5);
   }

   public function create()
   {
       return view('territory.create');
   }

   public function store(Request $request)
   {
       $request->validate([
           'tcode'=>'required',
           'tname'=>'required',
           'zid '=>'required',
           'rid '=>'required',
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
