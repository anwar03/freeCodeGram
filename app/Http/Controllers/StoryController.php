<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class StoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('story.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image']
        ]);
        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}" ))->fit(1200, 1200);

        $image->save();

        auth()->user()->story()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/'.auth()->user()->id);
    }

    public function show(Story $story)
    {
        return view('story.show', compact('story'));
    }
}
