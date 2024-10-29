<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{url("/") }}">Home</a> |
    <a href="{{url("about") }}">About</a> |
    <a href="{{ url("contact") }}"> Contact</a> |
    <a href="{{ route("product") }}"> sell product</a> |
    <a href="{{url("register") }}">Register</a> 
    <h1>sell product</h1>
    <hr>
    <form action="{{ route("save.product") }}" method="POST"> 
        @csrf
        <p>
            Product Name : <input type="text" name="product_name">
        </p>
        <p>
            Quantity  : <input type="text" name="qty">
        </p>
        <p>
            Unit Price  : <input type="text" name="unit_price">
        </p>
        <p>
            Discount ($)  : <input type="text" name="discount" value="0">
        </p>
        <p>
            Total   : <input type="text" value={{ $total }}>
        </p>
    <button type="submit">Save</button>
    </form>
</body>
</html>