<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    // public function show($id)
    public function show()
    {
        //
        return view('profile.show');
    }

    // public function edit($id)
    public function edit()
    {
        //
        return view('profile.edit');
    }

    public function update(Request $request, $id)
    {
        //
        return redirect('profile/show/{id}');
    }
}
