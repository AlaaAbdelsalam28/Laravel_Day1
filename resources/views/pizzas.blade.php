@extends('dashboard')
@section('title')
   Order pizza
@endsection
@section('content')
<h1>{{ $pizano }}</h1>

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif




<form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
           <div class="input-group">
         
    
           <span class="input-group-text">Pizza</span><br>
      <input type="text" aria-label="Pizza name" name="pizza-name" class="form-control"placeholder="Pizza name" value="{{ old('pizza-name') }}">
      <input type="text" aria-label="extra" name="extra" class="form-control"placeholder="extra"  value="{{ old('extra') }}">
    </div><br>
    <label for="exampleInputSelect">Category</label>
    <select class="form-select" aria-label="Default select example" name="category"  value="{{ old('category') }}" >
      @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select><br>
    <label for="exampleInputSelect">Size</label>
    <select class="form-select" aria-label="Default select example" name="size"  value="{{ old('size') }}">
      <option value="Small">Small</option>
      <option value="Medium">Medium</option>
      <option value="Large">Large</option>
      <option value="X-Large">X-Large</option>
    </select><br>
    <div class="form-group">
    <label for="exampleInputSelect">Price</label>
    <input type="number" aria-label="price" name="price" class="form-control"placeholder="price"  value="{{ old('price') }}">
            </div>

              <div class="mb-3">
                <label for="formFile" class="form-label">file input</label>
                <input class="form-control" type="file" id="formFile" name="pic">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
</form>
            @endsection