<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    return view('admin.category.index');
    }
    public function add()
    {
        return view('admin.category.add');
    } 
    public function insert(Request $request)
    {
       $category =new Category();
       if($request->hasfile('image'))
       {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('assets/uploads/category'.$filename);
        $category->image = $filename;
       }
       $category->name = $request->input('names');
       $category->slug = $request->input('slug');
       $category->description = $request->input('description');
       $category->status = $request->input('status') == TRUE ? '1':'0';
       $category->popular = $request->input('popular') == TRUE ? '1':'0';
       $category->meta_keywords = $request->input('meta_keywords');
       $category->meta_descrip = $request->input('meta_description');
       $category->save();
       return redirect('/main')->with('status',"Category Added Successfuly");
    } 
    public function storagesysunits(){
        return view('layouts.storagesys&units');
    }
    public function sofasarmchairs(){
        return view('layouts.sofas&armchairs');
    }   
    public function tableschairs(){
        return view('layouts.tables&chairs');
    }
}
