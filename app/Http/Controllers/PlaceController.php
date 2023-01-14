<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function place()
    {
        return view('place');
    }

    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request)
    {
        Place::create(
            [
                'name' => $request->name,
                'description' =>$request->description,
                'address'=>$request->address,
            ]
            );
            return redirect('/places');
    }
    
    public function show($id)
    {
       $place = Place::find($id);

       return view('show', compact('place'));
    }

    public function edit($id)
    {
        $place = Place::find($id);

        return view('edit', compact('place'));
    }

    public function update($id, Request $request)
    {
        $place = Place::find($id);

        $place -> update(
            [
                'name' => $request -> name,
                'description' => $request ->description,
                'address' => $request -> address,
            ]
            );
            return redirect('/places/show/' . $id);
    }

    public function delete($id)
    {
        $place = Place::find($id);

        $place -> delete();

        return redirect('/places');
    }

    public function getAll()
    {
        
        $place = Place::all();
        
        return view('/allPlaces', compact('place'));
    }
}
