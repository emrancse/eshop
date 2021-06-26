<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthValidationRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function loginForm()
    {
        return view('backend.auth.loginform');
    }

    public function loginProcess(AuthValidationRequest $request)
    {
        $credentials = $request->validated();

        if(Auth::attempt($credentials))
        {
            return redirect()->route('dashboard.index');
        }

        session()->flash('message','Invalid credentials');

        return redirect()->back()->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

}
