<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //redireccion a projects
    public function projects(){
        return view('services.projects');
    }
    //redireccion a plumbing
    public function plumbing(){
        return view('services.plumbing');
    }
    //redireccion a OUTSIDE
    public function outside(){
        return view('services.outside');
    }
    //redireccion a inside
    public function inside(){
        return view('services.inside');
    }
    //redireccion a electricist
    public function electricist(){
        return view('services.electricist');
    }
    //redireccion a cleaning
    public function cleaning(){
        return view('services.cleaning');
    }
}
