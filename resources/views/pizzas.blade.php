
<!DOCTYPE html>
<html>
<head>
<title>pizzas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Pizza Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
       aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item">
           <a class="nav-link" href="#">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Orders</a>
         </li>
         <li class="nav-item active">
           <a class="nav-link" href="#">Menu</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Customers</a>
         </li>
       </ul>
       <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
     </div>
   </nav><br><br>
   

    
   
   <div class="container-fluid my-3">
   <div class="row">
  <div class="col-md-3">
    <div class="sidebar">
      <div class="accordion" id="menuAccordion">
        <div class="card">
          <div class="card-header" id="headingOne">
                <h2>Menu</h2>
          </div>
        
          
          
            
            <div class="card-body">
              <ul class="list-group">
                
                <li class="list-group-item"><a href="#">Cheese Pizza</a></li>
                <li class="list-group-item"><a href="#">Pepperoni Pizza</a></li>
                <li class="list-group-item"><a href="#">Meat Pizza</a></li>
                <li class="list-group-item"><a href="#">Margherita Pizza</a></li>
                <li class="list-group-item"><a href="#">BBQ Chicken Pizza</a></li>
                <li class="list-group-item"><a href="#">Buffalo Pizza</a></li>
                <li class="list-group-item"><a href="#">Greek Pizza</a></li>
                <li class="list-group-item"><a href="#">Pizza Crust</a></li>
                <li class="list-group-item"><a href="#">Hawaiian Pizza</a></li>
           
              </ul>
            
           

          </div>
        </div>
      </div>
    </div>
  </div>

   <!-- Content area -->
   <div class="col-md-5">
   
   <h1>{{ $title }}</h1>
    @isset($menu)
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Size</th>
        </tr>
    </thead>
    <tbody>
        @foreach($menu as $pizza)
        <tr>
            <td>{{ $pizza['name'] }}</td>
            <td>{{ $pizza['price'] }}</td>
            <td>{{ $pizza['size'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endisset
        </div>
  


            </div>
</div>
   