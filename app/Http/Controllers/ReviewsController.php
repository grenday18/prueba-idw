<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function __construct()
    {
    }

    public function listar(Request $request){

        $reviews = $this->temporalRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );
    
        Reviews::all();
    }

    public function index(){
        return Reviews::all();
    }

    protected function organizarDatos($reviews){
        $data = array();
        foreach($reviews as $review){
            $array = array();
            $array['title'] = $review->title;
            $array['subtitle'] = $review->user->name;
            $array['fecha'] =  date("d/m/Y", strtotime($review->created_at));
            $array['text'] = $review->critica;
            $array['points'] = rand(5,0);
            array_push($data,$array);
        }
    }
}
