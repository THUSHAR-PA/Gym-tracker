@extends('layout')

@section('title', 'Login')

@section('content')
<div class="login-container">
  <h2>Login to Your Account</h2>
  <form method="POST" action="{{ url('/login') }}">
    @csrf

    <div class="form-group">
      <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
      @error('email')<small class="error">{{ $message }}</small>@enderror
    </div>

    <div class="form-group">
      <input name="password" type="password" placeholder="Password" required>
      @error('password')<small class="error">{{ $message }}</small>@enderror
    </div>

    <button type="submit" class="btn-primary">Login</button>
  </form>
</div>
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endpush