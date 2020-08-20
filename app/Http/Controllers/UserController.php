<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    // public function show($id)
    public function show()
    {
        //
        // $user = User::where('id', $user_id)->firstOrFail();
        // return view('user.show', ['user' => $user]);
        return view('user.show');
    }

    // public function edit($id)
    public function edit()
    {
        //
        return view('user.edit');
    }

    public function update(Request $request, $id)
    {
        //
        return redirect('user/show/{id}');
    }

}
