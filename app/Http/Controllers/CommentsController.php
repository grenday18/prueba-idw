<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CommentsController extends Controller
{
    public function store(Request $request){
        if(Gate::allows('create-comment',Auth::user())){
            $comments = Comments::create($request);
            return $comments;
        }
    }
}
