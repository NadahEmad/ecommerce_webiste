<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserProfile\UpdateUserProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with('roles')->get();
        return view('pages.dashboard.user.list'
            , compact('users'));
    }


    public function user_profile()
    {
        $user = User::find(Auth::id());
        return view('pages.dashboard.profile.user',compact('user'));
    }

    public function update_user_profile(UpdateUserProfileRequest $request,$id)
    {
        $request->validated();
        $user=User::find($id);

        if ($request->has('password') && $request['password'] != '')
        {
            $password=bcrypt($request['password']);
        }
        else
        {
            $password=$user['password'];
        }

        $user->update([
            'first_name'=>$request['first_name'],
            'last_name'=> $request['last_name'],
            'email'=>$request['email'],
            'country'=>$request['country'],
            'address'=>$request['address'],
            'password'=>$password,
        ]);

        return view('pages.dashboard.profile.user',compact('user'));
    }



}
