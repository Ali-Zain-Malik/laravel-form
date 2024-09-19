@extends('layout')
@section('title', "Welcome")
@section('content')
    <div style="min-height:100%;" class="container d-flex justify-content-center flex-column">
        <h2 class="text-center fw-bold">Welcome</h2>

        <div class="w-100 d-flex flex-column align-items-center my-5">
            <button class="btn btn-primary rounded-pill w-25 py-2 fs-5" onclick="register()">Register</button>
            <button class="btn btn-secondary rounded-pill w-25 py-2 fs-5 mt-3" onclick="login()">Login</button>
        </div>
    </div>
@endsection


<script>
    function register()
    {
        location.href   =   "{{route("register")}}";
    }
    function login()
    {
        location.href   =   "{{route("login")}}";
    }
</script>