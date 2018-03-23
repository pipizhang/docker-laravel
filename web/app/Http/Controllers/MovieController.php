<?php

namespace App\Http\Controllers;

use App\Movie;

class MovieController extends Controller
{
    public function all() {
        return Movie::all();
    }
}
