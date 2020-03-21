<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WelcomeRequest;
use Illuminate\Support\Facades\Hash;

class WelcomeController extends Controller
{
    public function submitForm(WelcomeRequest $req)
    {

        $req->input('login');
        $hashedPassword = Hash::make($req->input('password'));
        if (Hash::check('11111111', $hashedPassword))  {
            print_r($hashedPassword);
        }
        $req->session()->put('auth',true);
        return redirect()->route('users');

    }
    public function showForm(){
        return view('welcome');
    }
}
