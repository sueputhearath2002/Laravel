@extends("layout.master")
@section("content")
<p> User name : {{ $name }}</p>
    <p> Phone Number : {{ $phone }}</p>
    <p> Email : {{ $email}}</p>
    @foreach($ar as $a)
    <p>{{ $a }}</p>
    @endforeach 
       
@endsection