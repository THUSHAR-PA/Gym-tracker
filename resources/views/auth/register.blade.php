@extends('layout')

@section('title', 'Sign Up')

@section('content')
<div class="auth-container">
  <h2>Create Your Account</h2>
  <form method="POST" action="{{ url('/signup') }}" class="auth-form">
    @csrf

    <input name="name" type="text" placeholder="Full Name" value="{{ old('name') }}" required>
    @error('name')<div class="error">{{ $message }}</div>@enderror

    <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
    @error('email')<div class="error">{{ $message }}</div>@enderror

    <input name="password" type="password" placeholder="Password" required>
    @error('password')<div class="error">{{ $message }}</div>@enderror

    <input name="password_confirmation" type="password" placeholder="Confirm Password" required>

    <button type="submit">Sign Up</button>
  </form>
</div>
@endsection

@push('styles')
@vite('resources/css/auth.css')
@endpush
