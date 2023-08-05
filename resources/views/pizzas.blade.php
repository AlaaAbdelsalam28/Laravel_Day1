@extends('dashboard')
@section('title')
   Order pizza
@endsection
@section('content')
<h1>{{ $pizano }}</h1>
           <div class="input-group">
         
    
      <span class="input-group-text">First and last name</span><br>
      <input type="text" aria-label="First name" class="form-control"placeholder="First name">
      <input type="text" aria-label="Last name" class="form-control"placeholder="Last name">
    </div><br>
    <select class="form-select" aria-label="Default select example">
      <option selected>Pizza Menu</option>
      <option value="1">Cheese Pizza</option>
      <option value="2">Pepperoni Pizza</option>
      <option value="3">Meat Pizza</option>
      <option value="4"> Margherita Pizza</option>
      <option value="5"> BBQ Chicken Pizza</option>
      <option value="6"> Buffalo Pizza</option>
      <option value="7"> California Pizza</option>
      <option value="8">  Greek Pizza</option>
      <option value="9"> Pizza Crust</option>
      <option value="10"> Hawaiian Pizza</option>
     
    </select><br><br>
    <div class="form-group">
    
    
                <label for="exampleInputEmail1">Email address</label><br>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                    anyone else.</small>
            </div>

            @endsection