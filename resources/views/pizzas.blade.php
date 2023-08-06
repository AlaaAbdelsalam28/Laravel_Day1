@extends('dashboard')
@section('title')
   Order pizza
@endsection
@section('content')
<h1>{{ $pizano }}</h1>
           <div class="input-group">
         
    
           <span class="input-group-text">Pizza</span><br>
      <input type="text" aria-label="Pizza name" class="form-control"placeholder="Pizza name">
      <input type="text" aria-label="extra" class="form-control"placeholder="extra">
    </div><br>
    <select class="form-select" aria-label="Default select example">
      <option selected>Pizza size</option>
      <option value="1">Small</option>
      <option value="2">Medium</option>
      <option value="2">Large</option>
      <option value="2">X-Large</option>
    </select><br><br>
    <div class="form-group">
    
    <input type="number" aria-label="price" class="form-control"placeholder="price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            @endsection