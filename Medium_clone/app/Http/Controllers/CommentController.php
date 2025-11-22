<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class CommentController extends Controller
{
  public function index(Comment $comments){
    dd($comments->get()->all());
  }
  public function show(){

  }
}
