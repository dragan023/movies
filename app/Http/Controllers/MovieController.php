<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    //

    public function index() {
        $movies = Movie::all();
        return view('layouts/movies', compact('movies'));
    }

    public function show($id) {
        $singleMovie = Movie::findOrFail($id);
        return view('layouts/movie', compact('singleMovie'));
    }

    public function create() {
        return view('layouts/create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'storyline' => 'required|max:1000',
            'director' => 'required',
            'date' => 'required|integer|between:1900,2020',
        ]);

        $submitedMovie = new Movie;
        $submitedMovie->title = $request->title;
        $submitedMovie->genre = $request->genre;
        $submitedMovie->storyline = $request->storyline;
        $submitedMovie->director = $request->director;
        $submitedMovie->relase_date = $request->date;
        $submitedMovie->save();
    }
}
