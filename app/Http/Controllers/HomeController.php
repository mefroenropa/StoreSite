<?php

namespace App\Http\Controllers;


use System\Database\DBBuilder\DBBuilder;

class HomeController extends Controller
{

    public function index(){
 
        return view('app.404');
    }

}