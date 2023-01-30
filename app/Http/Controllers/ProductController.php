<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;

class ProductController extends Controller
{
public function index(){
  $data= Product::get();
 // return $data;
 return view('product-list',compact('data'));
}
public function add(){
    return view('add-products');

    return redirect()->back()->with( 'succes','product added successfully');
}

public function save (Request $request ){
    $id=$request->id;
    $libelle=$request->libelle;
    $description=$request->description;
    $qnt=$request->qnt;
    $price=$request->price;





     $pr=new Product();
     $pr->id=$id;
     $pr->libelle=$libelle;
     $pr->description=$description;
     $pr->qnt=$qnt;
     $pr->price=$price;


$pr->save();
   return redirect()->back()->with( 'succes','product updated successfully');

}
public function edit ($id){
    $data=Product::where('id','=',$id);
    return view('edit-products',compact('data'));

}
public function update(Request $request){
    $request->validate([
        'id'=>'required',
        'libelle'=>'required',
        'description'=>'required',
        'price'=>'required',
        'qnt'=>'required',
    ]);
    $id=$request->id;
    $libelle=$request->libelle;
    $description=$request->description;
    $qnt=$request->qnt;
    $price=$request->price;


    Product::where('id','=',$id)->update([

       'id'=>$id,
       'libelle'=>$libelle,

        'description'=>$description,

        'qnt'=>$qnt,

        'price'=>$price,


    ]);
    return redirect()->back()->with( 'succes','product updated successfully');

}
public function confirmdestroy(Product$pr){
    $this->Poduct=$product;
    $this->confirmingprdelete=true;

}
public function destroy($id =null){
    Product::first()->delete();
    return redirect()->back()->with( 'succes','product updated successfully');

}


}

