<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;

use moviexpert\Http\Requests;
use moviexpert\Http\Controllers\Controller;

class FrontendController extends Controller
{
  public function index(){
    return view("frontend.index");
  }
  public function peliculas(){
    return view("frontend.peliculas");
  }
  public function concursos(){
    return view("frontend.concursos");
  }
  public function chat(){
    return view("frontend.chat");
  }
}
