<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // dd($users);

        return view('backend.user.index',compact('users'));

    }

    public function create()
    {
        return  view('backend.user.create');
    }

    public function store(Request $request)
    {
        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => trim(strtolower($request->input('email'))),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role'),
        ];

        $insert = User::create($data);
        return back();

    }
}
