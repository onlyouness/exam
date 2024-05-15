<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Client;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    //
    public function show()
    {
        return view("login");
    }
    public function showRegister()
    {
        return view("register");
    }
    public function store(Request $request)
    {
        $credential = [
            "prenom" => $request->prenom,
            "password" => $request->password,
        ];
        $user = Client::where("prenom", $request->prenom)->first();
        $admin = Admin::where("prenom", $request->prenom)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                
                if (
                    \Illuminate\Support\Facades\Auth::guard("client")->attempt([
                        "prenom" => $request->prenom,
                        "password" => $request->password,
                    ])
                ) {
                    return redirect('/');

                }
            }
        }
        if ($admin) {
            if (Hash::check($request->password, $admin->password)) {
                
                if (
                    \Illuminate\Support\Facades\Auth::guard("admin")->attempt([
                        "prenom" => $request->prenom,
                        "password" => $request->password,
                    ])
                ) {
                    return redirect('/dashboard');

                }
            }
        }
        return redirect()->back();
    }
    public function logOut(){
        if(Auth::guard("admin")->check()){
            Auth::guard("admin")->logout();
        }elseif(Auth::guard("client")->check()){
            Auth::guard("client")->logout();
        }
        return redirect()->route('login');
    }
    public function register(Request $request)
    {
        $client = Client::create([
            'nom' => $request['nom'],
            "email" => $request["email"],
            // 'num_permis' => $request['num_permis'],
            'prenom' => $request['prenom'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->back();

    }

}