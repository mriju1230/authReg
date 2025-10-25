@extends('layouts.app')

@section('main')
<div class="container my-5">
    <div class="profile-card mx-auto">
        <div class="profile-header text-center mb-2">
            <h3 class="fw-bold text-white mb-1">Welcome, {{ Auth::guard('student')->user()->name }}</h3>
            <p class="mb-3 text-light">Student ID: {{ Auth::guard('student')->user()->student_id }}</p>
        </div>

        <div class="text-center">
            <img src="{{ URL::to('media/student/' . Auth::guard('student') -> user()->photo) }}" alt="Profile Photo" class="profile-photo shadow">
        </div>

        <div class="info-section mt-4 px-4 pb-4">
            <h5 class="fw-bold text-primary mb-3 border-bottom pb-2">Profile Information</h5>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="fw-semibold text-muted">Full Name:</label>
                    <p class="mb-0 text-dark">{{ Auth::guard('student')->user()->name }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-semibold text-muted">Email:</label>
                    <p class="mb-0 text-dark">{{ Auth::guard('student')->user()->email }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-semibold text-muted">Phone:</label>
                    <p class="mb-0 text-dark">{{ Auth::guard('student')->user()->phone }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-semibold text-muted">Address:</label>
                    <p class="mb-0 text-dark">{{ Auth::guard('student')->user()->address }}</p>
                </div>
            </div>
        </div>

        <div class="text-center pb-4">
            <a href="{{ route('student.logout') }}" 
               class="btn btn-danger px-4 py-2 rounded-pill fw-semibold shadow-sm">
               Logout
            </a>
        </div>
    </div>
</div>
@endsection
