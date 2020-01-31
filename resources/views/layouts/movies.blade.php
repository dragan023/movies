@extends('layouts.master')

@section('content')
    @foreach ($movies as $movie)
    <div>
        <h3><a href="/movie/{{ $movie->id }}">{{ $movie->title }}</a></h3>
        <p>{{ $movie->storyline }}</p>
    </div>
    @endforeach
@endsection