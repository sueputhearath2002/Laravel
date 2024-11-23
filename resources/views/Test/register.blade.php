@extends("layout.master")
@section("content")
<div class="login-box">
    <h2>Login</h2>
    <form action="{{route("register.save")}}" method="POST">
        @csrf
        <div class="user-box">
            <input type="text" name="username" required="">
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
        </div>
        <button class="my-button" type="submit">SUBMIT</button>
    </form>

</div>

@endsection
