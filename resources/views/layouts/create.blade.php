@extends('layouts.master')

@section('title')
    Add new movie
@endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




<div class="container bg-light rounded-lg p-3 mt-5">
<h2 class="mb-5">Add new movie</h2>
    <form method="post">
    @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre">
        </div>
        <div class="form-group w-25">
            <label for="director">Director</label>
            <input type="text" class="form-control" id="director" name="director">
        </div>
        <div class="form-group w-25">
            <label for="relase_date">Year</label>
            <input type="number" class="form-control" id="relase_date" name="relase_date">
        </div>

        <div class="form-group">
            <label for="storyline">Storyline</label>
            <textarea class="form-control" id="storyline" rows="3" name="storyline"></textarea>
        </div>
        <button type="submit" class="btn btn-dark ml-auto d-block">Submit</button>
    </form>
</div>
@endsection