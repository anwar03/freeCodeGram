<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        return view('profile.index', [
            "user" => $user,
        ]);
    }

    public function edit(User $user){
        return view('profile.edit', compact('user'));
    }

    public function update(User $user){

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => ''
        ]);

        auth()->user()->profile->update($data);
        return redirect('/profile/'. $user->id);
    }
}
