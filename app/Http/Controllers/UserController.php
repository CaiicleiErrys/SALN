<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function admin()
    {
        $users = User::all();
        return view('admin.user',compact('users'));
    }

    // public function delete($id)
    // {
    //     User::destroy($id);
    //     return redirect()->back();
    // }
}
