<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getIndex() {

    	$products = \App\Product::all();

    	return view('products.productsTable', ['produits' => $products]);
    }

    public function getShow($id) {

    	$product = \App\Product::find($id);

    	return view('products.show', ['produit' => $product]);
    }
}
