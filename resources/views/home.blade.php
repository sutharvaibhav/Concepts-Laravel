@extends('layouts.layout')
@section('content')
    <div class="container-fluid border d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="">
            <h1 class="h3 fw-bold text-center text-decoration-underline mb-5">User Registration</h1>
            {{-- <model-viewer src="{{ asset('hyundai.glb') }}" alt="3D Product" auto-rotate camera-controls
                style="width: 500px; height: 500px;" touch-action="pan-y" ar ar-modes="webxr scene-viewer quick-look"
                shadow-intensity="1" class="border">
            </model-viewer> --}}
            <form action="{{ route('send-email') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" />
                </div>
                <button class="btn btn-primary">Register</button>
        </div>
    @endsection
