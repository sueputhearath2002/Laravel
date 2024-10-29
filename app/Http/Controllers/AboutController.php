<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $r){
    $company = "This data is pass from AboutController";
        return view("Test.about",compact("company"));
    }
}
