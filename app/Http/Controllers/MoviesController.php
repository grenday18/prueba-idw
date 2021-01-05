<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;

class MoviesController extends Controller
{
    public function index(){
        return Movies::all();
    }
    public function store(Request $request){
        $movie = Movies::create($request);
        if(!empty($movie)){
            return $movie;
        }
        // mensaje de error
        return 'error';
    }
}
