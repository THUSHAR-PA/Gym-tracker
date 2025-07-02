@extends('layout')

@section('title', 'Login')

@section('content')
<div class="auth-container">
  <h2>Login to Your Account</h2>
  <form method="POST" action="{{ url('/login') }}" class="auth-form">
    @csrf

    <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
    @error('email')<div class="error">{{ $message }}</div>@enderror

    <input name="password" type="password" placeholder="Password" required>
    @error('password')<div class="error">{{ $message }}</div>@enderror

    <button type="submit">Login</button>
  </form>
</div>
@endsection

@push('styles')
@vite('resources/css/auth.css')
@endpush
