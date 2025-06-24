<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food & Gym Tracker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&display=swap" rel="stylesheet">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }
        body { font-family:'Baloo Bhaijaan 2', cursive; background:#f0f2f5; color:#333; }
        header { background:#3c5985; color:#fff; padding:15px 40px; display:flex; justify-content:space-between; align-items:center; }
        .logo { font-size:24px; font-weight:bold; }
        nav a { color:#fff; text-decoration:none; margin-left:20px; font-size:16px; }
        nav a:hover { text-decoration:underline; }
        .hero { display:flex; flex-direction:column; align-items:center; justify-content:center; padding:80px 20px; background:#e0eafc; text-align:center; }
        .hero img { width:320px; max-width:90%; border-radius:8px; box-shadow:0 4px 15px rgba(0,0,0,0.1); margin-bottom:30px; }
        .hero h1 { font-size:36px; color:#3c5985; margin-bottom:15px; }
        .hero p { font-size:18px; max-width:600px; color:#555; margin-bottom:30px; }
        .hero .cta { padding:14px 30px; font-size:18px; background:#516478; color:#fff; text-decoration:none; border-radius:6px; transition:background .3s; }
        .hero .cta:hover { background:#0056b3; }
        footer { background:#3c5985; color:#fff; text-align:center; padding:20px; font-size:14px; margin-top:40px; }
    </style>
</head>
<body>

<header>
    <div class="logo">Food & Gym Tracker</div>
    <nav>
        <a href="/">Home</a>
        <a href="{{ url("/login") }}">Login</a>
        <a href="/contact">Contact</a>
    </nav>
</header>

<section class="hero">
    <img src="https://i.imgur.com/U3vTGjX.png" alt="Motivation">
    <h1>Log. Progress. Thrive.</h1>
    <p>Empower your wellness journey with easy food & workout tracking. Stay accountable, stay motivated.</p>
    <a href="/signup" class="cta">Get Started Free</a>
</section>

<footer>
    &copy; {{ date('Y') }} Food & Gym Tracker. All rights reserved.
</footer>

</body>
</html>
