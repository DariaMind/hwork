@extends('layouts.main')

@section('content')


<h1>{{$title}}</h1>

 @foreach ($products as $product)
 <div class="col-md-3">
<div class="card" style="width: 18rem; ">
    <img src="{{$product->img}}" class="card-img-top" alt="{{$product->name}}">

   
    <div class="card-body product-name" >
      <h5 class="card-title">{{$product->name}}</div>
      </h5>
      <p class="card-text">{{$product->description}}</p>
      <a href="#" class="btn btn-primary">Bay Now</a>
    </div>
     </div>
    </div>
 @endforeach

 {{$products->links()}}


 @endsection

 @section('title', 'product')
 