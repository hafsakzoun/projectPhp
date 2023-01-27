@extends('layouts.admin')
@section('title','categories')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Add Category
    </h1>
    <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
        
        <div class="col-md-6 mb-3">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="col-md-6 mb-3">
            <label for="">Slug</label>
            <input type="text" class="form-control" name="slug">
        </div>
        <div class=col-md-6>
            <label for="">Description</label>
            <textaerea type="text" rows="3" class="form-control" name="description"></textaerea>
        </div>
        <div class=col-md-6>
            <label for="">Slug</label>
            <input type="text" class="form-control" name="slug">
        </div>
        <div class="col-md-6 mb-3">
            <label for="">Status</label>
            <input class="checkbox" name="status">
        </div>
        <div class="col-md-6 mb-3">
            <label for="">Popular</label>
            <input class="checkbox" name="popular">
        </div>
        <div class="col-md-12 mb-3" >
            <label for="">Meta Title</label>
            <textarea type="text" rows="3" class="form-control" name="meta-tilte"></textarea>
        </div>
        <div class="col-md-12 mb-3">
            <label for=""> Meta Keywords</label>
            <textarea  rows="3" class="form-control" name="meta-keywords"></textarea>
        </div>
        <div class="col-md-12 mb-3">
            <label for=""> Meta Description</label>
            <textarea  rows="3" class="form-control" name="meta-description"></textarea>
        </div>
        <div class=col-md-12>
           <input type="file" name="image" calss="form-control">
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
</body>
</html>

@endsection