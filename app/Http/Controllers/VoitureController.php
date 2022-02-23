<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function index()
    {
        $data = Voiture::latest()->paginate(8);

        return view('voiture.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('voiture.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'marque' => 'required',
            'couleur' => 'required',
            'prix' => 'required',
            'nbrRoue' => 'required',
            'nbrPortiere' => 'required',
            'nbrPlace' => 'required',
            'pathImage' => 'required',

        ]);

        $filename = time(). '.' . $request->pathImage->extension();


        $request->image->storeAs(
            'images',
            $filename,
            'public'
        );
        
        Voiture::create($request->all());


        return redirect()->route('voiture.create')
                        ->with('success','La voirture a été bien ajoutée.');
    }

    public function show(Voiture $voiture)
    {
        return view('voiture.show',compact('voiture'));
    }

    public function edit(voiture $voiture)
    {
        return view('voiture.edit',compact('voiture'));
    }

    public function update(Request $request, Voiture $voiture)
    {
        $request->validate([
            'marque' => 'required',
            'couleur' => 'required',
            'prix' => 'required',
            'nbrRoue' => 'required',
            'nbrPortiere' => 'required',
            'nbrPlace' => 'required',
            'pathImage' => 'required',
        ]);

        $voiture->update($request->all());

        return redirect()->route('voiture.index')
                        ->with('success','Modification à été prise en compte');
    }


    public function destroy(Voiture $voiture)
    {
        $voiture->delete();

        return redirect()->route('voiture.index')
                        ->with('success','Cette voiture à ete bien supprimer');
    }


    public function research()
    {
       $voiture = Voiture::with('%', '%LIKE', '$marque', '%')->paginate(8);
       return view('voitoire.show', compact('voiture'));
    }
}
