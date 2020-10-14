<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Storage;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        if(!empty($keyword))
        {
            $users = User::where('name', 'like', '%'.$keyword.'%')->paginate(5);
        } else {
            $users = User::orderBy('created_at', 'DESC')->paginate(5);
        }

        return view('admin.users.index', [
            'users' => $users,
            'keyword' => $keyword
        ]);
    }

    public function show(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $photos = $user->photos->sortByDesc('created_at');
        return view('admin.users.show', ['user' => $user, 'photos' => $photos]);
    }

    public function edit(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $this->validate($request, User::$rules);

        $user = User::where('id', $request->user_id)->first();
        if ($request->user_image !=null) {
            $path = Storage::disk('s3')->putFile('user-images',$request->user_image,'public');
            $user->image_path = Storage::disk('s3')->url($path);
        }
        $user->name = $request->user_name;
        $user->body = $request->body;
        $user->save();

        return redirect()->route('admin.users.index');
    }

    public function destroy(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
