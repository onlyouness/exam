<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    //
    public function show(){
return view("login");
    }
    public function store(Request $request){
        $credential = [
            "prenom" => $request->prenom,
            "password" => $request->password,
        ];
        $user = Client::where("prenom", $request->prenom)->first();
        \Log::info("user".$user);
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
            // if ($request->password == $user->password) {
                if (\Illuminate\Support\Facades\Auth::guard("client")->attempt( [
                    "prenom" => $request->prenom,
                    "password" => $request->password,
                ])) {
                    \Log::info("auth");
                    return redirect('/');
                   
                }
            } 
 }
    }
    public function register(Request $request){
        $client = Client::create([
            'nom' => $request['nom'],
            'num_permis' => $request['num_permis'],
            'prenom' => $request['prenom'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->back();
    }

}