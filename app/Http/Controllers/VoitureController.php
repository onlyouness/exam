<?php

namespace App\Http\Controllers;

use App\Models\Location;
use id;
use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoitureController extends Controller
{
    //
    //Client Actions
    public function index(){
        $voitures = Voiture::paginate(5);
        return view('index', compact('voitures'));

    }
    public function show($id){
        $voiture = Voiture::findOrFail($id);
        return view('voitures.show', compact('voiture'));
    }
    public function saveLoyer(Voiture $voiture,Request $request){
        \Log::info("voiture " . $voiture);
        \Log::info("user " . Auth::guard("client")->user()->id);
        \Log::info("request " . json_encode($request->all()));
        $data = [
            "id_client"=>Auth::guard("client")->user()->id,
            "id_voiture" => $voiture->id,
            "date_debut_location" =>$request->date_debut,
            "date_fin_location"=>$request->date_fin,
        ];
        Location::create($data);
        return redirect("/")->with('success', 'Voiture loyer avec succès !');
        
    }

    //Admin Actions
    public function ajouteVoiture(){
        return view('admin.ajouter');
    }
    public function store(Request $request){
        \Log::info("request" . json_encode($request->all()));
        $request->validate([
            'immatriculation' => 'required|unique:voitures',
            'num_assurance' => 'required',
            'kilometrage' => 'required',
        ]);

        Voiture::create($request->all()); 
        return redirect()->route('dashboard')->with('success', 'Voiture ajoutée avec succès !');
    }
    public function edit(Voiture $voiture)
    {
        \Log::info("voiture" . $voiture);
        return view("admin.edit", compact("voiture"));
    }

    
    public function update(Request $request,Voiture $voiture){
        $request->validate([
            'immatriculation' => 'required',
            'num_assurance' => 'required',
            'kilometrage' => 'required',
        ]);
        $incoming = [
            "immatriculation" => $request->immatriculation,
            "num_assurance" => $request->num_assurance,
            "kilometrage" => $request->kilometrage,
        ];
        $voiture->update($incoming); 
        return redirect()->route('dashboard')->with('success', 'Voiture mise à jour avec succès !');
    }

    public function showLocation (){
       $locations =  Location::latest()->get();
       \Log::info("voiturelocations " .json_encode( $locations));
        return view("admin.locations", compact("locations"));
    }
    
    public function destroy(Voiture $voiture){
        // $voiture = Voiture::findOrFail($id);
        
        $voiture->delete(); 
        return redirect()->back()->with('success', 'Voiture supprimée avec succès !');
    }
    public function deleteLocation(Location $location){
        $location->delete();
        return redirect()->back();
        
    }
    public function dashboard(){
        $voitures = Voiture::all();
        return view("admin.dashboard",compact("voitures"));
    }
    
}