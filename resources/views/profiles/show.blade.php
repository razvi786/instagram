@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-4 w-100 pl-5">
            <img class="ml-5 mt-2" src="{{ $user->profile->profileImage() }}" style="height:150px;border-radius:50%;">
        </div>
        <div class="col-8">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                @can('update', $user->profile )
                <a href="/posts/create">Add Post</a>
                @endcan
            </div>
            <div class="d-flex">
                <div class="mr-3"><strong>{{ $user->posts->count()}}</strong> posts</div>
                <div class="mr-3"><strong>110k</strong> followers</div>
                <div class="mr-3"><strong>18k</strong> following</div>
            </div>
            <div class="pt-3">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div class="mt-1"> <a href="#">{{$user->profile->url}}</a></div>
            @can('update', $user->profile )
            <a href="/profiles/{{$user->id}}/edit"><span class="text-danger">
                    Edit Profile
                </span></a>
            @endcan
        </div>
    </div>
    <hr>
    <div class="row pt-3">
        @foreach ( $user->posts as $post )
        <div class="col-4 mb-3">
            <a href="/posts/{{$post->id}}"><img src="/storage/{{ $post->image}}" class="w-100"></a>
        </div>
        @endforeach
    </div>
</div>
@endsection