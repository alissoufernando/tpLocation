<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLocationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Location::where('user_id', Auth::user()->id )->paginate(5);


        return view('utilisateurs.mes-location',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // return view('utilisateurs.location-create-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dateDebutLocation' => 'required',
            'dateFinLocation' => 'required',
            'telephone' => 'required',
            'user_id' => 'required',
            'voiture_id' => 'required',


        ]);


        Location::create($request->all());


        return redirect()->route('Ulocation.index')
                        ->with('success','rservation prise en compte , le chauffeur passera.');
    }



    public function updateRendre(Request $request, Location $location)
    {
        $request->validate([
            'rendre' => 'required',

        ]);


        $location->update($request->all());


        return redirect()->route('Ulocation.index')
                        ->with('success','Voiture rendu');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        // $location = Location::with('voiture_id')->paginate(12);
        // return view('admin.location',compact('voiture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($voiture)
    {
       $voiture =  Voiture::find($voiture);
        return view('utilisateurs.location-create-user',compact('voiture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        // $location->delete();

        // return redirect()->route('location.index')
        //                 ->with('danger','Cette voiture à ete bien supprimer');
    }
}
