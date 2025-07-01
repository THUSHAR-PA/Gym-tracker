@extends('layout')
@section('content')
<h2>Sign Up</h2>
<form method="POST" action="{{ url('/signup') }}">
  @csrf
  <input name="name" type="text" placeholder="Name" value="{{ old('name') }}" required>
  @error('name')<div>{{ $message }}</div>@enderror

  <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
  @error('email')<div>{{ $message }}</div>@enderror

  <input name="password" type="password" placeholder="Password" required>
  @error('password')<div>{{ $message }}</div>@enderror

  <input name="password_confirmation" type="password" placeholder="Confirm Password" required>

  <button type="submit">Register</button>
</form>
@endsection
