@extends('layouts.app')

@section('content')
    <div class="container">
        {{--        @if ($errors->count() > 0)--}}
        {{--            {{ $errors->first('url') }}--}}
        {{--        @endif--}}
        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="col-8">
                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>
                    <div class="col-md-8">
                        <input id="title"
                               type="text"
                               lass="form-control @error('title') is-invalid @enderror"
                               name="title"
                               value="{{ old('title') ?? $user->profile->title }}"
                               autocomplete="caption" autofocus
                               class="@error('url') is-invalid @enderror"
                        >

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label ">Description</label>
                    <div class="col-md-8">
                        <input id="description"
                               type="text"
                               lass="form-control @error('description') is-invalid @enderror"
                               name="description"
                               value="{{ old('description') ?? $user->profile->description }}"
                               autocomplete="caption" autofocus
                               class="@error('url') is-invalid @enderror"
                        >

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label ">Url</label>
                    <div class="col-md-8">
                        <input id="url"
                               type="text"
                               lass="form-control @error('url') is-invalid @enderror"
                               name="url"
                               value="{{ old('url') ?? $user->profile->url }}"
                               autocomplete="caption" autofocus
                               class="@error('url') is-invalid @enderror"
                        >

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label ">Profile Image</label>
                    <div class="col-md-8">
                        <input class="form-control-file"
                               id="image"
                               type="file"
                               name="image">

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                    </div>

                </div>
                <div class="row pt-4">
                    <button type="submit" class="btn btn-primary">Save profile</button>
                </div>
            </div>
        </form>
    </div>
@endsection
