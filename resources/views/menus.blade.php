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
            <th scope="col">Pizza name</th>
            <th scope="col">Extra</th>
            <th scope="col">Size</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($menu as $pizza)
        <tr>
            <td>{{ $pizza['name'] }}</td>
            <td>{{ $pizza['extra'] }}</td>
            <td>{{ $pizza['size'] }}</td>
            <td>{{ $pizza['price'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endisset
@endsection

