<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getIndex() {

    	$products = \App\Product::all();

    	//dd($products);
    	return view('products', ['products' => $products]);
    }
}
