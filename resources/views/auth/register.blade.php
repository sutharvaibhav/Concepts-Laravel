@extends('layouts.layout')
@section('content')
    <div class="container-fluid border d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="w-25">
            <h1 class="h3 fw-bold text-center text-decoration-underline mb-4">Registration Form</h1>
            <form action="{{ route('registerStore') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="inputState">You're a</label>
                    <select id="inputState" name="role" class="form-control" value="{{ old('role') }}">
                        <option selected disabled>Choose a role</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                    @error('role')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
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
                <div class="text-muted mb-5">Already have an account? <span><a href="{{ route('login') }}"
                            style="text-decoration: none">Login
                            here</a></span></div>
                <button type="submit" class="btn btn-primary w-100 py-2">Register</button>
            </form>
        </div>
    </div>
@endsection
