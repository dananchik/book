<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\models\User;
use App\models\Group;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUsers()
    {
        $data = User::all();
        return view('users',
            ['data' => $data]);
    }

    public function UserForm()
    {
        return view('new_user',
            ['data' => Group::all()]);
    }

    /**
     * @param UserRequest $req
     * @return \Illuminate\Http\RedirectResponse
     */
    public function newUser(UserRequest $req)
    {
        $user = new User();
        $user->name = $req->input('name');
        $user->groupId = $req->input('group');
        $path = $req->file('avatar')
            ->store('upload_avatars', 'public');
        $user->avatar = $path;
        $user->save();
        return redirect()
            ->route('users')
            ->with('success', 'Пользователь добавлен!');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editUserForm($id)
    {
        $user = User::findOrFail($id);
        $groupName = Group::findOrFail($user->groupId)->group;
        return view('edit_user',
            ['data' => User::findOrFail($id),
                'groupName' => $groupName,
                'groups' => Group::all()]);
    }

    /**
     * @param $id
     * @param UserRequest $req
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editUserSubmit($id, Request $req)
    {
        $validation = $req->validate([
            'name' => 'required|min:6',
            'avatar' => 'image|file',
            'group' => 'required'
        ]);
        $user = User::findOrFail($id);;
        $user->name = $req->input('name');
        $user->groupId = $req->input('group');
        if (!$req->file('avatar') == null) {
            $path = $req->file('avatar')
                ->store('upload_avatars', 'public');
            $user->avatar = $path;
        }
        $user->save();
        return redirect()
            ->route('users')
            ->with('success', 'Пользователь отредактирован');
    }

    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();
        return redirect()
            ->route('users')
            ->with('success', 'Пользователь удален!');
    }
}
