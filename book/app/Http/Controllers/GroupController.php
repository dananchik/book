<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
use App\models\Group;

class GroupController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showGroups()
    {
        return view('groups');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newGroupForm()
    {
        return view('new_group');
    }

    /**
     * @param GroupRequest $req
     * @return \Illuminate\Http\RedirectResponse
     */
    public function newGroupSubmit(GroupRequest $req)
    {
        $group = new Group();
        $group->group = $req->input('group');
        $group->save();
        return redirect()->route('showGroups');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editGroupForm($id)
    {
        $group = Group::findOrFail($id);
        return view('group_edit', ['data' => $group]);
    }

    /**
     * @param $id
     * @param GroupRequest $req
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editGroupSubmit($id, GroupRequest $req)
    {

        $group = Group::findOrFail($id);
        $group->group = $req->input('group');
        $group->save();
        return redirect()->route('showGroups');
    }

}
