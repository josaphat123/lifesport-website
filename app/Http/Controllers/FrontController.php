<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //Redirection sur la page principale

    public function index(){
        return view('pages.index');
    }
}
