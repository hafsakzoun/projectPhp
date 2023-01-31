<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProducttController;
use Illuminate\Http\Request;


class ProducttController extends Controller{

   public function index(){
    $product=product::all();
    return view('admin.product.index',compact('product'));
   }
public function add()
    {
        $category=Category::all();
        return view('admin.product.add',compact('product'));
    } 
}
?><?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use App\models\Productt;

class ProducttController extends Controller
{
   public function index(){
    $product=Productt::all();
    return view('Admin.product.index',compact('product'));

}
public function add()
    {
        $category=Category::all();
        return view('admin.product.add',compact('product'));
    } 
    public function insert(Request $request)
    {
       $pr=new Productt();
       if($request->hasfile('image'))
       {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('assets/uploads/product',$filename);
        $pr->image = $filename;
       }
       $pr->name = $request->input('name');
       $pr->slug = $request->input('slug');
       $pr->description = $request->input('small_description');
       $pr->description = $request->input('description');
       $pr->status = $request->input('status') == TRUE ? '1':'0';
       $pr->original_price=$request->input('original_price');
       $pr->selling_price=$request->input('selling_price');
       $pr->meta_title = $request->input('meta title', 'default_value');
       $pr->meta_keywords = $request->input('meta keywords', 'default_value');
       $pr->meta_descrip = $request->input('meta description');
       $pr->save();
       return redirect('/product')->with('status',"Category Added Successfuly");
    } 
}