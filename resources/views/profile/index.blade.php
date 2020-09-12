@extends('layouts.app')

@section('content')
<div class="container profile-container">
    <div class="row">
        <div class="col-3 profile-img-container">
            <img class="img-fluid profile-img" src="{{ $user->profile->profileImage() }}" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{ $user->username }}</div>
                    <follow-button user-id="{{ $user->id }}"></follow-button>
                </div>
                @can('update', $user->profile)
                    <a href="/story/create">Add new Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <div class="d-block">
                    <a href="/profile/{{ $user->id }}/edit"> Edit Profile</a>
                </div>
            @endcan
            <div class="d-flex">
                <div class="pr-5"> <strong>1213</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>210</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div><p>{{ $user->profile->description }}</p></div>
            <div> <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a> </div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach($user->stories as $story)
        <div class="col-4 pb-5">
            <a href="/story/{{ $story->id }}">
                <img src="/storage/{{ $story->image }}" class="w-100">
            </a>
        </div>
        @endforeach


    </div>
</div>
@endsection
