@extends('layouts.master')

@section('title')
{{ $singleMovie->title }}
@endsection

@section('content')
    <div>
        <h1>{{ $singleMovie->title }}</h1>
        <p>{{ $singleMovie->genre }}</p>
        <p>{{ $singleMovie->director }}</p>
        <p>{{ $singleMovie->relase_date }}</p>

        <span>{{ $singleMovie->storyline }}</span>
    </div>
@endsection

@section('comments')
    <div>
        <h1>Comments</h1>

        @foreach($singleMovie->comments as $comment)
            <span>{{$comment->content}}</span>
        @endforeach
    </div>
@endsection
