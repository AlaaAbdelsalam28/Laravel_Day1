@extends('dashboard')
@section('title')
    menu
@endsection
@section('content')
   <h1>{{ $title }}</h1>
    @isset($pizzas)
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Pizza name</th>
            <th scope="col">Extra</th>
            <th scope="col">Category</th>
            <th scope="col">Size</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">View</th>
            <th scope="col">Delete</th>
            <th scope="col">Edit</th>

        </tr>
    </thead>
    <tbody>
        @foreach($pizzas as $pizza)
        <tr>
        <td>{{ $pizza->{"pizza-name"} }}</td>
            <td>{{ $pizza->extra }}</td>
            <td>{{ $pizza->category->name ?? '-' }}</td>
            <td>{{ $pizza->size }}</td>
            <td>{{ $pizza->price }}</td>
            <td><img width="90px" height="90px" src="{{ asset('storage/pizzas/') ."/". $pizza->pic}}" alt="none"></td>

            <td><a href="{{ route('menus.show', $pizza->id) }}">View</a></td>
            <td>
            <form action="{{ route('menus.destroy' ,$pizza->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"
            onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                </form>
            </td>

            <td>
            <form action="{{ route('menus.edit' ,$pizza->id) }}" method="GET">
            @csrf
            <button type="submit" class="btn btn-danger"
            onclick="return confirm('Are you sure you want to edit this book?')">Edit</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody> 
</table>
{{$pizzas->links()}}
<!-- @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}  
  </div>
@endif -->
@endisset
@endsection

