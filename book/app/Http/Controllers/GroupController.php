<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
use App\models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function showGroups()
    {
        return view('groups');
    }

    public function newGroupForm()
    {
        return view('new_group');
    }

    public function newGroupSubmit(GroupRequest $req)
    {
        $group = new Group();
        print_r($req->input('group'));
        $group->group = $req->input('group');
        print_r($group);
        $group->save();
    }

    public function editGroupForm()
    {
        return view('group_edit');
    }

    public function editGroupSubmit()
    {

    }

}
