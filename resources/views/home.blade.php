@extends('layout')
@section('content')
<section class="hero">
  <div class="hero-content">
    <div class="hero-text">
      <h1>Log. Progress. Thrive.</h1>
      <p>Empower your wellness journey with easy food & workout tracking. Stay accountable, stay motivated.</p>
      <a href="/signup" class="cta">Get Started Free</a>
    </div>
    <div class="hero-image">
      <img src="{{ asset('images/foodgym.jpg') }}" alt="Motivation">
    </div>
  </div>
</section>
@endsection
