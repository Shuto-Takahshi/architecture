<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // public function show($id)
    public function show(Request $request)
    {
        //
        $user = Auth::user();
        return view('user.show', ['user' => $user]);
    }

    // public function edit($id)
    public function edit()
    {
        $user = Auth::user();
        return view('user.edit', ['user' => $user]);
    }

    // public function update(Request $request, $id)
    public function update(Request $request)
    {
        //
        $user = Auth::user();
        if ($request->user_image !=null) {
            $path = $request->user_image->storeAs('public/user_images', $user->id);
            $user->image_path = basename($path);
        }
        $user->name = $request->user_name;
        $user->body = $request->body;
        $user->save();

        // return redirect('user/show/{id}');
        return redirect('user/show');
    }

}
