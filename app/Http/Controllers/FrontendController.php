<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('web.home.index');
    }
    public function view(){
        return view('web.home.category');
    }
    public function info(){
        return view('web.home.product_details');
    }

}
