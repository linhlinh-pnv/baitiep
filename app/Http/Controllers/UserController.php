<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $title ="Đây là tiêu đề";
        $linh="HOoo Linh nè";
       
        return view('test')->with('title',$title)->with('linh',$linh);
    }
}
