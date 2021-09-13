<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function homepage() {

        // $comics = config('comics');
    
        // $data = ['comicsSeries' => $comics];
    
        // return view('home', $data);

        $comicsSeries = config('comics');

        return view('home', compact('comicsSeries'));
    }

    public function show($id) {

        $comics = config('comics');
    
        $data = ['comicsSeries' => $comics[$id]];
    
        return view('detail', $data);
    }
}
