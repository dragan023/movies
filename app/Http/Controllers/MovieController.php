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
}
