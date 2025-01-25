@extends('layouts.layout')
@section('content')
    <div class="container-fluid border d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="w-25">
            <h1 class="h3 fw-bold text-center text-decoration-underline mb-4">Login Form</h1>
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('loginStore') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Enter password" value="{{ old('password') }}">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="text-muted mb-5">Don't have an account? <span><a href="{{ route('registerForm') }}"
                            style="text-decoration: none">Register
                            here</a></span></div>
                <button type="submit" class="btn btn-primary w-100 py-2">Login</button>
            </form>
        </div>
    </div>
@endsection
