@extends('layouts.main')

@section('content')
    


<h1>REVIEWS</h1>

@include('messages.errors')

@if(session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif

<form action="/reviews" method="POST">
   
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" 
            class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{old('name')}}">
        
        @error('name') 
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="review">Review</label>
        <textarea class="form-control" name="review" id="review" ></textarea>
    </div>

    <button class="btn btn-primary mt-2">Send Review</button>

</form>


@endsection

@section('title', 'reviews')