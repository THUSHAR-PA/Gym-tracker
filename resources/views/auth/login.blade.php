@extends('layout')
@section('content')
<h2>Login</h2>
<form method="POST" action="{{ url('/login') }}">
  @csrf
  <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
  @error('email')<div>{{ $message }}</div>@enderror

  <input name="password" type="password" placeholder="Password" required>
  @error('password')<div>{{ $message }}</div>@enderror

  <button type="submit">Login</button>
</form>
@endsection

