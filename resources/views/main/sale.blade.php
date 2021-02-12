@extends('layouts.main')

@section('content')


<h1>{{$title}}</h1>


<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">

    @foreach ($products as $product)
    <div class="card-body product-name" >
      <h5 class="card-title">{{$product->name}}</div>
      </h5>
      <p class="card-text">{{$product->description}}</p>
      <a href="#" class="btn btn-primary">Bay Now</a>
    </div>
    @endforeach

  </div>

 @endsection

 @section('title', 'product')
 