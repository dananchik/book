<?php

namespace App\Http\Controllers;

use App\models\SuperUser;
use Illuminate\Http\Request;
use App\Http\Requests\WelcomeRequest;
use Illuminate\Support\Facades\Hash;

class WelcomeController extends Controller
{
    public function submitForm(WelcomeRequest $req)
    {

        $login = $req->input('login');
        $hashedPassword = Hash::make($req->input('password'));
        if (Hash::check('11111111', $hashedPassword))  {
            $user = ['name'=> $login,'password'=>$hashedPassword];
            $this->authorize('login',$user);
        }
        return redirect()->route('users');

    }
    public function showForm(){
        return view('welcome');
    }
}
