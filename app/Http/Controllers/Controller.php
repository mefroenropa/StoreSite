<?php

namespace App\Http\Controllers;

use System\Auth\Auth;
use System\Session\Session;

class Controller{
    public function __construct()
    {
        if(empty(Session::get('user'))){

            Auth::loginById(1);   
        }
    }
}