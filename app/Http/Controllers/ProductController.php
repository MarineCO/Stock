<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getIndex() {

    	$products = \App\Product::all();
    	
    	foreach ($products as $product) { 
    		$product->id;
    		$product->name;
    		$product->price;
    		$product->stock;
    	}

    	//dd($products);
    	return view('products', ['products' => $products]);
    }
}
