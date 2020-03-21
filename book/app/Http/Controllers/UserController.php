<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\models\User;
use App\models\Group;
use Mockery\Exception;

class UserController extends Controller
{
    public function getUsers()
    {
        $data = User::all();
        return view('users', ['data' => $data]);
    }

    public function UserForm()
    {
        return view('new_user', ['data' => Group::all()]);
    }

    public function newUser(UserRequest $req)
    {
        $user = new User();
        $user->name = $req->input('name');
        $user->groupId = $req->input('group');
        $path = $req->file('avatar')->store('upload_avatars','public');
        print_r($path);
        $user->avatar = $path;
        $user->save();
        return redirect()->route('users')->with('success','запись добавлена');
    }

    public function editUserForm($id)
    {
        try {
            $user = User::find($id);
            $groupName = Group::find($user->groupId)->group;
            return view('edit_user', ['data' => User::find($id), 'groupName' => $groupName, 'groups' => Group::all()]);
        } catch (Exception $e) {
            print_r('ошибка');
        }

    }

    public function editUserSubmit($id, UserRequest $req)
    {
        $user = User::find($id);;

        $user->name = $req->input('name');
        $user->groupId = $req->input('group');
        $path = $req->file('avatar')->store('upload_avatars','public');

        $user->avatar = $path;
        print_r($user);
        $user->save();
    }
}
