<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index(){
        //
        if(Auth::id()){
         //Redirige a la pestaña  de admin
         $acces=Auth();
         if($acces==true){
            return view('admin.index');
         }
         
        }
    }
}
