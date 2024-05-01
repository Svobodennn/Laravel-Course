<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function index(){
        return view('index');
    }

    public function book($slug = 'didn\'t type anything'){
        return 'The book you\'re looking for is: '. $slug;
    }
    public function aboutus(){
        return view('pages.contact');
    }
}
