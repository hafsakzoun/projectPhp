@extends('admin.admina')
@section('title','categories')
@section('content')
        <div class="card">
            <div class="card-header">   
                <h4>Category Page</h4>
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
                        @foreach($category as $item)
                            <tr> 
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    <img src="{{ asset('assets/uploads/category/'.$item->image) }}"  class="cate-image" alt="Image here"> 
                                </td>
                                <td>
                                    <a href="{{ url('edit-prod/'.$item->id) }}" class="btn btn-primary" >Edit</a>
                                    <a href=" {{ url('delete-category/'.$item->id) }}" class="btn btn-danger" >Delete</a>
                                    

                                </td>
                        @endforeach
                    </tbody>
                </table>    

            </div>
        </div>
@endsection