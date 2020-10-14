<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Photo;
use Illuminate\Support\Facades\Auth;
use Storage;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $photos = Photo::where('user_id', $user->id)
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $followings = $user->followings->sortByDesc('created_at');
        $followers = $user->followers->sortByDesc('created_at');

        // dd($followings);
        return view('users.show', [
            'user' => $user,
            'photos' => $photos,
            'followings' => $followings,
            'followers' => $followers,
        ]);
    }

    public function likes(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $photos = Photo::select('photos.*')
            ->join('likes', 'likes.photo_id', '=', 'photos.id')
            ->where('likes.user_id', '=', $user->id)
            ->orderBy('photos.created_at', 'DESC')
            ->paginate(10);

            $followings = $user->followings->sortByDesc('created_at');
            $followers = $user->followers->sortByDesc('created_at');
        return view('users.likes', [
            'user' => $user,
            'photos' => $photos,
            'followings' => $followings,
            'followers' => $followers,
        ]);
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
            // $path = $request->user_image->store('public/user_images');
            // $user->image_path = basename($path);
            $path = Storage::disk('s3')->putFile('user-images',$request->user_image,'public');
            $user->image_path = Storage::disk('s3')->url($path);
        }
        $user->name = $request->user_name;
        $user->body = $request->body;
        $user->save();

        return redirect()->route('users.show', ['user' => $user]);
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
