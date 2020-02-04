<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\Movie;

class MovieController extends Controller
{
    //

    public function index() {
        $movies = Movie::all();
        return view('layouts/movies', compact('movies'));
    }

    public function show($id) {
        $singleMovie = Movie::with('comments')->findOrFail($id);
        return view('layouts/movie', compact('singleMovie'));
    }

    public function create() {
        return view('layouts/create');
    }

    public function store(MovieRequest $request) {
        $movie = Movie::create(request()->all());
        return redirect('/movies');
    }
}
