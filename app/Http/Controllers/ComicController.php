<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public function homepage() {

        //********* */ solution with config
        // $comics = config('comics');
    
        // $data = ['comicsSeries' => $comics];
    
        // return view('home', $data);

        //********* */ solution with compact
        // $comicsSeries = config('comics');

        // return view('home', compact('comicsSeries'));

        //********* */ solution with model
        $comicsSeries = Comic::all();

        return view('home', compact('comicsSeries'));
    }

    public function show($id) {

        $comicsSeries = Comic::where('id', $id)->first();

        return view('detail', compact('comicsSeries'));
    }
}
