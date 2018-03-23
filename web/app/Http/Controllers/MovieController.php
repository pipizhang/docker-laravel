<?php

namespace App\Http\Controllers;

class MovieController extends Controller
{
    public function all() {
        return [
            'Wonder Woman',
            'Star Wars: The Last jedi',
            'Logan'
        ];
    }
}
