<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $voiture;

    public function index()
    {
        $voiture = Voiture::latest()->paginate(5);

        return view('admin.voiture',compact('voiture'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.voiture-create');
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
            'marque' => 'required',
            'plaque' => 'required',
            'couleur' => 'required',
            'model' => 'required',
            'prix' => 'required',

            'pathImage' => 'required',

        ]);

        $filename = time(). '.' . $request->pathImage->extension();


        $path = $request->pathImage->storeAs(
            'images',
            $filename,
            'public'
        );

        $voiture = new Voiture();

        $voiture->marque = $request->marque;
        $voiture->plaque = $request->plaque;
        $voiture->couleur = $request->couleur;
        $voiture->model = $request->model;
        $voiture->prix = $request->prix;
        $voiture->pathImage = $path;

        $voiture->save();
        

        // $voiture = new Voiture();

        // $voiture->marque = $request->marque;
        // $voiture->plaque = $request->plaque;
        // $voiture->couleur = $request->couleur;
        // $voiture->model = $request->model;
        // $voiture->prix = $request->prix;
        // $voiture->description = $request->description;
        // $voiture->pathImage = $request->$path;

        // $voiture->save();


        return redirect()->route('voiture.create')
                        ->with('success','La voirture a été bien ajoutée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Voiture $voiture)
    {
        // return view('admin.voiture' ,compact('voiture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(voiture $voiture)
    {
        return view('admin.voiture-edit',compact('voiture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voiture $voiture)
    {
        $request->validate([
            'marque' => 'required',
            'plaque' => 'required',
            'model' => 'required',
            'couleur' => 'required',
            'prix' => 'required',
            'description' => 'required',
            'pathImage' => 'required',

        ]);

        $voiture->update($request->all());

        return redirect()->route('voiture.edit')
                        ->with('success','Modification à été prise en compte');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voiture $voiture)
    {
        $voiture->delete();

        return redirect()->route('voiture.index')
                        ->with('danger','Cette voiture à ete bien supprimer');
    }

    public function research(Voiture $voiture)
    {
       $voiture = Voiture::with('%', '%LIKE', '$marque', '%')->paginate(8);
       return view('admin.voiture', compact('voiture'));
    }
}
