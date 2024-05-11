<?php

namespace App\Http\Controllers;

use id;
use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    //
    public function index(){
        $voitures = Voiture::paginate(5);
        return view('index', compact('voitures'));

    }
    public function show($id){
        $voitures = Voiture::findOrFail($id);
        return view('voitures.show', compact('voitures'));
    }
    public function store(Request $request){
        $request->validate([
            'immatriculation' => 'required|unique:voitures',
            'num_assurance' => 'required',
            'kilometrage' => 'required',
            'date_debut_location' => 'required',
            'date_fin_location' => 'required',
            'id_client' => 'required|exists:clients,id',
        ]);

        Voiture::create($request->all()); 
        return redirect()->route('voitures.index')->with('success', 'Voiture ajoutée avec succès !');
    }

    
    public function update(Request $request,$id){
        $request->validate([
            'immatriculation' => 'required|unique:voitures,immatriculation,'.$id,
            'num_assurance' => 'required',
            'kilometrage' => 'required',
            'date_debut_location' => 'required',
            'date_fin_location' => 'required',
            'id_client' => 'required|exists:clients,id',
        ]);

        $voiture = Voiture::findOrFail($id);
        $voiture->update($request->all()); 
        return redirect()->route('voitures.index')->with('success', 'Voiture mise à jour avec succès !');
    }
    
    public function destroy($id){
        $voiture = Voiture::findOrFail($id);
        $voiture->delete(); 
        return redirect()->route('voitures.index')->with('success', 'Voiture supprimée avec succès !');
    }
    
}
