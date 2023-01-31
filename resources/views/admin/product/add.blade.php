@extends('layouts.admin')
@section('title','categories')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add product</h4>
        </div>
        <div class="card-body">
            <form action="{{url('insert-product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12 mb-3">
                          <select class="form-select" name="pr_id">

                           <option value="">select a Category</option>
                           @foreach($category as $item)


                          <option value="{{$item->id}}">"{{$item->name}}"</option>

                        </select>

                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description"  rows="3" class="form-control" ></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox" name="popular" class="form-control">
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
                        <textarea name="meta_description" rows="3" class="form-control" ></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
