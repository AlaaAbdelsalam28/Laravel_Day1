@extends('dashboard')
@section('title')
    Pizza Details
@endsection
@section('content')
<div class="card" style="width: 37rem;">
  <div class="card-body">
  <h1>Name: {{ $menu->{"pizza-name"} }}</h1>
  <img  width="180px" height="180px" src="{{ asset('storage/pizzas/'.$menu->pic) }}" alt="Pizza Image">
    <h1>Extra: {{ $menu->extra }}</h1>
    <h1>Category: {{ $menu->category->name ?? '-' }}</h1> 
    <h1>Size: {{ $menu->size }}</h1>
    <h1>Price: {{ $menu->price }}</h1>
    
  </div>
</div>
@endsection

