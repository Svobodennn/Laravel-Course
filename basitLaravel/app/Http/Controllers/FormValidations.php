<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RegisterRequest;

class FormValidations extends Controller
{
    public function index(){
        return view('register');
    }
                        //Request
    public function post(RegisterRequest $request){
        $request->validate([
           'name' => 'required | min:3 | max:30' ,
           'email' => 'required | email | max:50',
           'password' => 'required | min:6 | max:24'
        ]);

        $rules = Validator::make($request->all(),
            [
                'name' => 'required | min:3 | max:30' ,
                'email' => 'required | email | max:50',
                'password' => 'required | min:6 | max:24'
            ]/*,['required' => 'custom msg',
                 'min' => ':attribute field must be minimum :min characters.. ']*/)/*->validate()*/;

        if ($rules->fails()){
            //custom msg
            return redirect()->back()->withErrors($rules)->withInput();
        }

        // ###### With RegisteRequest ######
        $isValidate = $request->validated();
    }
}
