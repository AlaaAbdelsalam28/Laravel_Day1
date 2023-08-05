
 

    <title>Dashboard</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
 
    <nav  class="navbar navbar-expand-lg navbar-dark  bg-primary">
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
   <div class="col-md-9">
   
   <div class="row">
        
        <div class="col-md-9">
            
        <h1>{{ $pizza }}</h1>
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
        </div>
        </div>
        
    </div>
    


            </div>
</div>
   