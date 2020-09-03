<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function show(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $photos = $user->photos->sortByDesc('created_at');
        return view('users.show', ['user' => $user, 'photos' => $photos]);
    }

    public function mypage(Request $request)
    {
        $user = Auth::user();
        $photos = $user->photos->sortByDesc('created_at');
        return view('users.mypage', ['user' => $user, 'photos' => $photos]);
    }

    public function edit()
    {
        $user = Auth::user();
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $this->validate($request, User::$rules);

        $user = Auth::user();
        if ($request->user_image !=null) {
            $path = $request->user_image->store('public/user_images');
            $user->image_path = basename($path);
        }
        $user->name = $request->user_name;
        $user->body = $request->body;
        $user->save();

        return redirect()->route('users.mypage');
    }
}
