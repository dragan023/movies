@extends('layouts.master')

@section('title')
    Add new movie
@endsection

@section('content')
<div class="container bg-light rounded-lg p-3 mt-5">
<h2 class="mb-5">Add new movie</h2>
    <form>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre">
        </div>
        <div class="form-group w-25">
            <label for="date">Year</label>
            <input type="number" class="form-control" id="date">
        </div>

        <div class="form-group">
            <label for="storyline">Storyline</label>
            <textarea class="form-control" id="storyline" rows="3"></textarea>
        </div>


        <button type="submit" class="btn btn-dark ml-auto d-block">Submit</button>
    </form>
</div>
@endsection