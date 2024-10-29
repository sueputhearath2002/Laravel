<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        $data["total"]= "";
        return view("Test/product",$data);
    }

    public function createProduct(Request $r){
        $price = $r->unit_price;
        $qty = $r->qty;
        $total  = $price*$qty;
        $data["total"]=$total;
         
        return view("Test/product" ,$data);
    }
}
