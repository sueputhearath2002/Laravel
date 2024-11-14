<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $r){
        $data = [
            "name" => "Sue Puthearath",
            "phone" => "08876543333",
            "email" => "Sueputhearath@gmail.com",
            "ar" => ["a", "b"] // Add the array as part of $data
        ];
    
       
        return view("Test.contact",$data);
    }
}
