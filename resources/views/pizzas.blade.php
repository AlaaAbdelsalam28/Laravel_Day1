@extends('dashboard')
@section('title')
   Order pizza
@endsection
@section('content')
<h1>{{ $pizano }}</h1>
<form action="{{ route('menus.store') }}" method="POST">
  @csrf
           <div class="input-group">
         
    
           <span class="input-group-text">Pizza</span><br>
      <input type="text" aria-label="Pizza name" name="pizza-name" class="form-control"placeholder="Pizza name">
      <input type="text" aria-label="extra" name="extra" class="form-control"placeholder="extra">
    </div><br>
    <select class="form-select" aria-label="Default select example" name="size">
      <option selected>Pizza size</option>
      <option value="Small">Small</option>
      <option value="Medium">Medium</option>
      <option value="Large">Large</option>
      <option value="X-Large">X-Large</option>
    </select><br><br>
    <div class="form-group">
    
    <input type="number" aria-label="price" name="price" class="form-control"placeholder="price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
</form>
            @endsection