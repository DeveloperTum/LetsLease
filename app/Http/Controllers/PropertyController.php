<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;


class PropertyController extends Controller
{
    //fetch all properties from the mysql database
    public function index()
    {
        $properties = Property::all();
        return view('list', ['properties' => $properties]);
    }


    //Show the html form for creating a new property.
    public function create()
    {
       return view('add');
    }



    //Store a newly created resource in storage.
    public function store(Request $request)
    {
        $newProperty = Property::create([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description

        ]);

         return redirect('list')->with('status', 'Property added succesfully');
       //return view('properties'.$newProperty->id);
        //return view('add')->with('status', 'Property added succesfully, click add to enter add more');
    }





    // Display a specific property from the database
    public function show(Property $property)
    {
        //return view('');
        $property = Property::find($property);
        return view('properties.show');
    }




    //Show the form for editing specific property.
    public function edit(Property $property)
    {
       // return view('edit', ['property' => $property,]);
       return view('edit', ['property'=>$property,]);


    }


    
     //Update the specific selected property.
    public function update(Request $request, Property $property)
    {
        $property->update([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description
        ]);

        return redirect('list'/*'property/' . $property->id . '/edit'*/)->with('status', 'Edit succesfull');
    }


    // Delete a specific property from our database.
    
    public function destroy(Property $property)
    {
        $property->delete();
        return redirect('list')->with('status', 'Property deleted succesfully');;
    }
}
