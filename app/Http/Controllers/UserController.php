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
        return view('users.show', [
            'user' => $user,
            'photos' => $photos,
        ]);
    }

    public function likes(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $photos = $user->likes->sortByDesc('created_at');
        return view('users.likes', [
            'user' => $user,
            'photos' => $photos,
        ]);
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

    public function follow(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();

        if ($user->id === $request->user()->id)
        {
            return abort('404', 'Cannot follow yourself.');
        }

        $request->user()->followings()->detach($user);
        $request->user()->followings()->attach($user);

        return ['user' => $user];
    }

    public function unfollow(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();

        if ($user->id === $request->user()->id)
        {
            return abort('404', 'Cannot follow yourself.');
        }

        $request->user()->followings()->detach($user);

        return ['user' => $user];
    }
}
