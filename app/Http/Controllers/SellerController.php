<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellerController extends Controller 
{
    public function index() {
        $relation = DB::table('productsellers')->get();
        $users = DB::table('users')->select('users.name')->distinct()->join('productsellers', 'productsellers.user_id' , '=', 'users.id')->join('products', 'products.id' , '=', 'productsellers.product_id')->get();
        $sellers = [];
        foreach($users as $user) {
            $products = DB::table('users')->select('products.name')->join('productsellers', 'productsellers.user_id' , '=', 'users.id')->join('products', 'products.id' , '=', 'productsellers.product_id')->where('users.name' , '=' , $user->name)->get();
            $seller['name'] = $user->name;
            $seller['products'] = $products;
            $sellers[] = $seller;
        }

        return view('sellers.index', ['sellers' => $sellers]);
    }
}
