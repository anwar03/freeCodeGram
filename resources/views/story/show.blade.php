@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $story->image }}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="/storage/{{ $story->user->profile->image }}"
                                 class="w-100 rounded-circle post-profile-img">
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <a href="/profile/{{$story->user->id}}">
                                    <span class="text-dark">{{ $story->user->username }}</span>
                                </a> |
                                <a href="#">Follow</a>
                            </div>
                        </div>
                    </div>

                    <p>
                        <span class="font-weight-bold pr-1">
                            <a href="/profile/{{$story->user->id}}">
                                <span class="text-dark">{{ $story->user->username }}</span>
                            </a>
                        </span>
                        {{ $story->caption }}
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection
