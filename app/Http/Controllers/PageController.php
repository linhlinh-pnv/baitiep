<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('page.trangchu');
    }
    
    public function getProduct_type(){
        return view('page.product_type');
    }
    public function getProduct(){
        return view('page.produce');
    }
}
