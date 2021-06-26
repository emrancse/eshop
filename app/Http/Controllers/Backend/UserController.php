<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserValidationRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('backend.user.index',compact('users'));

    }

    public function create()
    {
        return  view('backend.user.create');
    }

    public function store(UserValidationRequest $request)
    {

        $data = $request->validated();

        $insert = User::create($data);

        return redirect()->route('users.index');

    }

    public function show(User $user)
    {
        return view('backend.user.show',compact('user'));
    }

    public function edit(User $user)
    {
        return view('backend.user.edit',compact('user'));
    }

    public function update(User $user, UserValidationRequest $request)
    {
        $data = $request->validated();

        $user->update($data);

        session()->flash('message','User updated successfully');
        
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        session()->flash('message','deleted successfully');

        return back();
    }


}
