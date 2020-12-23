<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CommentsController extends Controller
{
    public function create(){
        if(Gate::allows('create-comment',Auth::user()))
    }
}
