<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
</head>
<body>
    <a href="{{url("/") }}">Home</a> |
    <a href="{{url("about") }}">About</a> |
    <a href="{{ url("contact") }}"> Contact</a> |
    <a href="{{ route("product") }}"> sell product</a> |
    <a href="{{url("register") }}">Register</a> |
    <a href="{{route("upload") }}">Upload image</a> 
    <h1>
        This is contact page
    </h1>
    <hr>
    <p> User name : {{ $name }}</p>
    <p> Phone Number : {{ $phone }}</p>
    <p> Email : {{ $email}}</p>
    @foreach($ar as $a)
    <p>{{ $a }}</p>
    @endforeach 
       
</body>
</html>