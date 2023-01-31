@extends('layouts.admin')
@section('title','products')
@section('content')
        <div class="card">
            <div class="card-header">   
                <h4>Product Page</h4>
                </hr>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>description</th>
                            <th>image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach($product as $item)
                            <tr> 
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    <img src="{{ asset('assets/uploads/product/'.$item->image) }}"  class="cate-image" alt="Image here"> 
                                </td>
                                <td>
                                    <a href="{{url('edit-product/'.$item->id)}}" class="btn btn-primary" >Edit</a>
                                    <a href="{{url('delete-product/'.$item->id)}}" class="btn btn-primary" >Delet</a>
                                    <button class="btn btn-danger" >Delete</button>
                                </td>
                        @endforeach
                    </tbody>
                </table>    

            </div>
        </div>
@endsection