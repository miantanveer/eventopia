<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends AdminBaseController
{
    public function usersIndex()
    {
        $this->users = User::whereIsAdmin('0')->get();
        return view('content.admin.users.index',$this->data);
    }

    public function addUser(Request $req)
    {
        $this->users = User::whereIsAdmin('0')->get();
        return view('content.admin.users.index',$this->data);
    }
}
