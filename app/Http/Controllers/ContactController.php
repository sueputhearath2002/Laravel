<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $r){
        $data["name"] = "Sue puthearath";
        $data["phone"] = "08876543333";
        $data["email"] = "Sueputhearath@gmail.com";
       
        return view("Test.contact",$data);
    }
}
