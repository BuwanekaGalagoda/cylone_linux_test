<?php

namespace App\Http\Controllers;

use App\Models\zone;
use Illuminate\Http\Request;

class zoneController extends Controller
{
   public function index()
   {
       $zone = zone::latest()->paginate(5);
       return view('zone.index',compact('zone'));
            // ->with('i' (request()->input('page', 1) - 1) * 5);
   }

   public function create()
   {
       return view('zone.create');
   }

   public function store(Request $request)
   {
       $request->validate([
           'ldes'=>'required',
           'sdes'=>'required',
       ]);

       zone::create($request->all());

       return redirect()->route('zone.index')
       ->with('success','zone created successfully.');
   }
   public function show(zone $zone)
   {
       return view('zone.show',compact('zone'));
   }

   public function edit(zone $zone)
   {
       return view('zone.edit',compact('zone'));
   }

   public function update(Request $request,zone $zone)
   {
       $request->validate([

       ]);

       $zone->update($request->all());

       return redirect()->route('zone.index')
       ->with('success','zone updated successfully.');
   }

   public function destroy(zone $zone)
   {
       $zone->delete();

       return redirect()->route('zone.index')
       ->with('success','zone deleted successfully.');
   }
}
