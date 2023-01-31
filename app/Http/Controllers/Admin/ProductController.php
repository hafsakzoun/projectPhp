<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\admin\ProductController;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(){
    $products=Product::all();
    return view('admin.product.index',compact('products'));

}
public function add()
    {
        $category=Category::all();
        return view('product.add',compact('product'));
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
    public function edit($id)
    {
        $pr =Product::find($id);
        return view('admin.product.edit', compact('category'));
    }
    public function destroy($id)
    {
        $pr = Product::find($id);
        if($category->image)
        {
            $path = 'assets/uploads//'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('product')->with('status',"Category Deleted Successfuly");
    }
}
?>



