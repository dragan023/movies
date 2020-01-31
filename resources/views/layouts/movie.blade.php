@extends('layouts.master')

@section('content')
    <div>
        <h1>{{ $singleMovie->title }}</h1>
        <p>{{ $singleMovie->genre }}</p>
        <p>{{ $singleMovie->director }}</p>
        <p>{{ $singleMovie->relase_date }}</p>

        <span>{{ $singleMovie->storyline }}</span>
    </div>
@endsection
