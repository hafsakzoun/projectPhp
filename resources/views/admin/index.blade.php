@extends('admin.admina')

@section('content')
        <div class="card">
            <div class="card-body">
                <h1>{{ Auth::user()->name }}</h1>
            </div>
        </div>
@endsection