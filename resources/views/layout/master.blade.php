<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel ="stylesheet" href ="{{asset("bootstrap/css/bootstrap.css")}}">
    @yield("css")
</head>
<body>
<div class ="container">
<nav class="navbar navbar-expand-lg bg-success ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link text-light"  href="{{url("/")}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url("about")}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url("contact")}}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url("register")}}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url("product")}}">Sell Product</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
       
    </div>
  </div>
</nav>
  @yield("content")
  </div>
    <script src = "{{asset("js/jquery-3.7.1.js")}}"></script>
    <script src = "{{asset("bootstrap/js/bootstrap.js")}}"></script>
    @yield("js")
</body>
</html>