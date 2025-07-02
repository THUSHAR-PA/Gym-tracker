@extends('layout')

@section('title', 'Home')

@section('content')
<section class="hero">
  <div class="hero-content">
    <div class="hero-text">
      <h1>Log. Progress. Thrive.</h1>
      <p>Empower your wellness journey with easy food & workout tracking.</p>
      <p class="subtext">Stay accountable. Stay motivated. Every day counts.</p>
      <a href="/signup" class="cta">Get Started Free</a>
    </div>
  </div>
</section>
@endsection

@push('styles')
@vite('resources/css/home.css')
@endpush
