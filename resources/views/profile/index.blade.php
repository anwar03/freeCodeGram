@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="https://instagram.fdac24-1.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.fdac24-1.fna.fbcdn.net&_nc_ohc=Gq7OjltKEIkAX86ibTp&oh=4ad540de184b0b33b722f1bf4b8b8daa&oe=5F5E8967" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/story/create">Add new Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"> <strong>1213</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>210</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">Cool Title</div>
            <div><p>description</p></div>
            <div> <a href="#">url</a> </div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach($user->story as $s)
        <div class="col-4 pb-5">
            <a href="/story/{{ $s->id }}">
                <img src="/storage/{{ $s->image }}" class="w-100">
            </a>
        </div>
        @endforeach


    </div>
</div>
@endsection
