function login(event) {
  event.preventDefault(); // Prevent form reload

  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;
  const error = document.getElementById("error");

  // Simple static check (Don't use this in production)
  if (username === "admin" && password === "1234") {
    alert("Login successful!");
    window.location.href = "dashboard.html"; // Redirect (you can create this page)
  } else {
    error.textContent = "Invalid username or password.";
  }
}
