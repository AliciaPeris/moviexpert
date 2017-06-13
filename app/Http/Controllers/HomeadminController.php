<?php

namespace moviexpert\Http\Controllers;

use Illuminate\Http\Request;

use moviexpert\Http\Requests;

class HomeadminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
      return view("admin.index");
    }
}
