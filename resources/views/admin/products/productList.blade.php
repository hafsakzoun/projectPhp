@extends('layouts.admin')
@section('title','products')
@section('content')
<!-- prodcuts section starts  -->

<section class="products" id="products">

    <h1 class="heading"> latest <span>products</span> </h1>
    <h2 class="categorie">Chaire</h2>
    <div class="box-container chaire">
@foreach($products as $product)
        <div class="box">
            <div class="image">
                <img src="{{$product->image}}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <!--button href="#" class="cart-btn">Add To Cart</button-->
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button  class="cart-btn">Add To Cart</button>
                    </form>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>{{$product->name}}</h3>
                <div class="price">{{$product->price}} </div>
            </div>
        </div>
@endforeach
        

</section>

<!-- prodcuts section ends -->
@endsection