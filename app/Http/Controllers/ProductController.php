<!-- <?php

namespace App\Http\Controllers\ProductController;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('Admin.product.index',compact('products'));
    }


