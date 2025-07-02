<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&display=swap" rel="stylesheet">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title', 'Food & Gym Tracker')</title>
  @vite(['resources/css/style.css'])
  @stack('styles')


</head>
<body>
  <header>
    <div class="logo">Food & Gym Tracker</div>
    <nav>
      @auth
        <form method="POST" action="{{ route('logout') }}">@csrf<button>Logout</button></form>
      @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/signup') }}">Sign Up</a>
      @endauth
    </nav>
  </header>
  <main>
    @yield('content')
  </main>
</body>
</html>
