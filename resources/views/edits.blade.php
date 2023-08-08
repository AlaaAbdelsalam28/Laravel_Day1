@extends('dashboard')
@section('content')
    <h1>Edit Pizza</h1>

    <form action="{{ route('menus.update', $pizza->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Form fields for editing the pizza details -->
        <!-- Example fields: -->
        <div class="form-group">
            <label for="pizza-name">Pizza Name</label>
            <input type="text" name="pizza-name" class="form-control" value="{{ $pizza->{'pizza-name'} }}">
        </div>

        <div class="form-group">
            <label for="extra">Extra</label>
            <input type="text" name="extra" class="form-control" value="{{ $pizza->extra }}">
        </div>

        <div class="form-group">
            <label for="size">Size</label>
            <input type="text" name="size" class="form-control" value="{{ $pizza->size }}">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" value="{{ $pizza->price }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection