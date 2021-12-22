<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', [
            'products' => $products
        ]);
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        return view('products.show', ['product' => $product]);
    }

    public function create() {
        return view('products.create');
    }

    public function store() {
        $product = new Product();
        $product->name = request('name');
        $product->serial_number = request('serial_number');
        $product->stock = request('stock');
        $product->price = request('price');
        $product->description = request('description');
        $product->image_url = request('image_url');

        $product->save();
        return redirect('/products')->with('mssg', 'Product added succesfully.');
    }

    public function destroy($id) {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/')->with('mssg', 'Product removed succesfully.');
    }
}
