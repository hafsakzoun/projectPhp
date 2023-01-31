<?php

namespace App\Http\Controllers\Admin\ProductController;

use App\Http\Controllers\productController;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index',compact('products'));
    }
}
