<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();

        return view('Admin.products.productList',compact('products'));
    }
    public function sofaslist()
    {
        $products = Product::all();

        return view('layouts.sofasandarmchairs.sofas');
    }
    public function armchairslist()
    {
        $products = Product::all();
        return view('layouts.sofasandarmchairs.armchairs');
    }
    public function easychairslist()
    {
        $products = Product::all();

        return view('layouts.sofasandarmchairs.easychairs');
    }

    public function chaiselongueslist()
    {
        $products = Product::all();

        return view('layouts.sofasandarmchairs.chaiseslongues');
    }
    public function favorite(Product $product)
{
    $product->favorites()->create([
        'user_id' => auth()->id()
    ]);

    return back();
}

}