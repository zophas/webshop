<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use Illuminate\Support\Facades\DB;

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
        $seller_id = DB::table('productsellers')->select('user_id')->where('product_id', '=', $id)->get();
        var_dump($seller_id[0]->user_id);
        $user_name = DB::table('users')->where('id', '=', $seller_id[0]->user_id)->get();
        return view('products.show', ['product' => $product, 'user_name' => $user_name]);
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

        $seller = DB::table('productsellers')->insert(['product_id' => $product->id, 'user_id' => Auth::user()->id]);
        return redirect('/products')->with('mssg', 'Product added succesfully.');
    }

    public function relation() {
        
    }

    public function destroy($id) {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/')->with('mssg', 'Product removed succesfully.');
    }
}
