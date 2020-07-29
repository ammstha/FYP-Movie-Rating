<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users=User::paginate(7);
        return view('user.index',compact('users'));
    }


    public function create()
    {
        return view ('user.create');
    }


    public function store(StoreUser $request)
    {
        $user = User::create($request->data());
        $user->attachRole(Role::where('name','admin')->first());
        return redirect()->route('users.index');
    }

}
