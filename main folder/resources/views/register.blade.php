@extends('layout')
@section('title', "Register")

@section('content')
    <div style="height: 100%;" class="container w-100 d-flex justify-content-center align-items-center flex-column">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{$error}}
            @endforeach
        @endif

        @if (session()->has("error"))
            {{session("error")}}
        @elseif(session()->has("success"))
            {{session("success")}}
        @endif
        <h2 class="text-center mb-4 fw-bold">Register</h2>
        <form style="width: 450px;" action="{{route("register.post")}}" method="POST" id="register-form">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
          </form>
    </div>
@endsection