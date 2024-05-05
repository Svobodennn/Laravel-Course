<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestLibrary extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function post(Request $request){
        $data = $request->post();

        $name = $request->name;
        $email = $request->post('email');
        $method = $request->method();
        $path = $request->path();

        if ($request->is('contact')){
            echo 'the request is from contact';
        }

        if ($request->isMethod('POST')){
            echo ' and the method is post';
        }

        echo "<div style='background:#000;color:#12a500'>";
        print_r($path);
        echo "</div>";
    }
}
