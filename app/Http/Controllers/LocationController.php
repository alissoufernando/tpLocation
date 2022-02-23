<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{


    public function store(Request $request)
    {
         $request->validate([
            'dateDebutLocation' => 'required',
            'dateFinLocation' => 'required',
            'user_id' => 'required',
            'voiture_id' => 'required',


        ]);


        $location = new  Location();


        $location->dateDebutLocation = $request->dateDebutLocation;
        $location->dateFinLocation = $request->dateFinLocation;
        $location->user_id = $request->user_id;
        $location->voiture_id = $request->voiture_id;

        $location->save();


        return redirect()->route('location.index')
                        ->with('success','rservation prise en compte , le chauffeur passera.');
    }

    public function list(Location $location)
    {
        $location = Location::with('user_id')->paginate(12);
        return view('admin.admin',compact('voiture'));
    }


}
