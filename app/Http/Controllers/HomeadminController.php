<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;

use moviexpert\Http\Requests;

class HomeadminController extends Controller
{
    //
    public function index(){
      return view("admin.index");
    }
}
