<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function homepage() {

        $comics = config('comics');
    
        $data = ['comicsSeries' => $comics];
    
        return view('home', $data);
    }

    public function show($id) {

        $comics = config('comics');
    
        $data = ['comicsSerie' => $comics[$id]];
    
        return view('detail', $data);
    }
}
