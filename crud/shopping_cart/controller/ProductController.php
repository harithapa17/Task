<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productlist()
    
    {
       $products=Product::all();

       return view('products',compact('products'));

    }
}
