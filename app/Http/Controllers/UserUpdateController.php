<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserUpdateController extends Controller
{
    public function UpdateUser(Request $request)
    {
        if(!Auth()->user())
        {
            return redirect(route('login'));
        }

        $validate = Validator::make($request->all(),[
            'name' => ['required_without_all:email,password,confirmpass', 'nullable', 'min:6', 'regex:/^[A-Za-z\s]+$/'],
            'email' => 'required_without_all:name,password,confirmpass|nullable|email|unique:users',
            'password' => 'required_without_all:name,email,confirmpass|nullable|min:6',
            'confirmpass' => 'required_without_all:name,email,password|same:password',

        ]);

        if($validate->fails())
        {
            return back()->withErrors($validate);
        }

        $user = Auth::User();
        if ($request->filled('name')) {
            $user->name = $request->input('name');
        }
        if ($request->filled('email')){
            $user->email = $request->input('email');
        }
        if($request->filled('password')){
            $user->password = $request->input('password');
        }
        $user->save();
        return back()->withSuccess('1');
    }
}
