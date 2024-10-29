<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $r){
        return view("Test.register");
    }

    public function saveRegister(Request $r){
            $name = $r->name;
            $phone = $r->phone;
            $email = $r->email;
            $data = $r->all();
            dd($data);
            return view("about",$data);
    }
}
