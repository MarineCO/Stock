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
    	return response($product->stock);
    }

    public function postRestock($id) {

    	$product = \App\Product::find($id);
    	$product->stock++;
    	$product->save();
    	return response($product->stock);
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

    public function postDeleteProduct($id) {
    
    	$deleteProduct = \App\Product::find($id);
    	$deleteProduct->delete();

    	return back();
    }

    public function getEdit($id) {

    	$editProduct = \App\Product::find($id);

    	return view('products.editProduct', ['editProduct' => $editProduct]);
    }

    public function postEditProduct($id, Request $request) {
    	
    	$editProduct = \App\Product::find($id);
    	$editProduct->name = $request->name;
    	$editProduct->price = $request->price;
    	$editProduct->stock = $request->stock;
    	$editProduct->save();

    	return redirect('/products');
    }
}