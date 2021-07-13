@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-1">
            <img class="w-100" src="/storage/{{ $post->image }}">
        </div>
        <div class="col-md-4">
            <div class="d-flex align-items-center">
                <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle mr-3"
                    style=" height: 40px;">
                <a href="/profiles/{{ $post->user->id }}">
                    <h5 class="pl-2 font-weight-bold text-dark">{{ $post->user->username}}</h5>
                </a>
                <a class="pl-3" href="#">Follow</a>
            </div>
            <hr>
            <div>
                <a href="/profiles/{{ $post->user->id }}"><span
                        class="pl-2 font-weight-bold pr-2 text-dark">{{ $post->user->username}}</span></a>
                <span class="">{{ $post->caption}}</span>
            </div>
        </div>
    </div>
</div>
@endsection