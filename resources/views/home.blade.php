@extends('layouts.layout')
@section('content')
    <div class="container-fluid border d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="w-25">
            <h1 class="h3 fw-bold text-center text-decoration-underline mb-1">Home</h1>
            <div class="text-center">
                <a href="{{ route('login') }}" class="text-primary fs-5 text-decoration-none">Login</a>
                <a href="{{ route('registerForm') }}" class="text-success fs-5 text-decoration-none">Register</a>
            </div>
        </div>
    </div>
@endsection
