<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Page</title>
  @vite('resources/css/style.css')
  

  <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="login-container">
  <h2>Login</h2>
  <form method="POST" action="/login">
    <input type="text" name="email" placeholder="Email" required />
    <input type="password" name="password" placeholder="Password" required />
    <button type="submit">Login</button>
    <div class="error-message">Invalid credentials</div>
  </form>
</div>

  <script src="script.js"></script>
</body>
</html>
