@extends('layouts.layout')
@section('content')
    <div class="container-fluid border d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="w-25">
            <h1 class="h3 fw-bold text-center text-decoration-underline mb-1">User
                Dashboard</h1>
            <div class="text-center">
                <a href="{{ route('logout') }}" class="text-danger fs-5 text-decoration-none">Logout</a>
            </div>
        </div>
    </div>
@endsection
