<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\models\User;

class UserController extends Controller
{
    public function getUsers(){
        $user = new User;
        $data = User::all();
        return view('users',['data'=>$data]);
    }
    public function UserForm(){
        return view('new_user');
    }
    public function newUser(UserRequest $req){
        $user = new User();
        $user->name = $req->input('name');
        $user->group = $req->input('group');
        $user->avatar = 'картинка';
        echo $image_name = $req->file('avatar')->getClientOriginalName();
        $req->file('avatar')->store('public/upload_avatars');

    }
}
