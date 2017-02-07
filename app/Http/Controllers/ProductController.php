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

    public function postSell($id) {

    	$product = \App\Product::find($id);
    	$product->stock--;
    	$product->save();
    	return back(); //Return to the previous page
    }

    public function postRestock($id) {

    	$product = \App\Product::find($id);
    	$product->stock++;
    	$product->save();
    	return back(); //Return to the previous page
    }

    public function getAdd() {

    	return view('products.addProduct');
    }

    public function postAddProduct(Request $request) {

    	$newProduct = new \App\Product;

    	$newProduct->name = $request->name;
    	$newProduct->price = $request->price;
    	$newProduct->stock = $request->stock;
    	$newProduct->save();

    	return redirect('/products');
    }
}