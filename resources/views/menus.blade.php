@extends('dashboard')
@section('title')
    menu
@endsection
@section('content')
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
@endsection

