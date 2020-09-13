@extends('layouts.app')

@section('content')
    <div class="container profile-container">
        @foreach($posts as $post)
            <div class="row pt-4">
                <div class="col-6 offset-3">
                    <a href="/profile/{{ $post->user->id }}">
                        <img src="/storage/{{ $post->image }}" alt="" class="w-100">
                    </a>
                </div>
            </div>
            <div class="row pt-2 pb-2">
                <div class="col-6 offset-3">
                        <div class="d-flex align-items-center">
                            <div class="pr-3">
                                <img src="{{ $post->user->profile->profileImage() }}"
                                     class="w-100 rounded-circle post-profile-img">
                            </div>
                        <p class="m-0">
                            <span class="font-weight-bold pr-1">
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                            </span>
                            {{ $post->caption }}
                        </p>
                        </div>
                </div>
            </div>
        @endforeach

            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>

    </div>
@endsection
