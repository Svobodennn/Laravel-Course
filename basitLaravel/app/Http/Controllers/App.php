<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class App extends Controller
{
    public function index(){
        $data = ['name'=>'Melih', 'surname'=>'Saraç'];
        $data['names'] = ['Melih','Mammed','Mahluk'];
        $data['blog'] = "<b>Bold text</b> Lorem ipsum dolor sita amet.";
        return view('pages.indexInsidePages',$data);
        #return view('pages.indexInsidePages')->with('name','Melihhh');
    }

    public function aboutus(){
        return "aboutus";
    }

    public function user($id){
        return $id;
    }
}
