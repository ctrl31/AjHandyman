<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    //Redireccion a request a service
     //redireccion a projects
     public function request(){
        return view('extra.request');
    }
    //redireccion a about
     public function about_us(){
        return view('extra.about_us');
    }
}
