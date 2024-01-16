<!DOCTYPE html>
<html>

<head>
  <title>Login Form</title>
  <style>
    body {
      background-color: #333;
      font-family: Arial, sans-serif;
    }

    form {
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      margin: 0 auto;
      width: 300px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    input[type="text"],
    input[type="password"] {
      display: block;
      margin: 10px 0;
      padding: 10px;
      width: 100%;
      border-radius: 5px;
      border: none;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    input[type="submit"] {
      background-color: #f00;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px;
      cursor: pointer;
      width: 100%;
      margin-top: 10px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    input[type="submit"]:hover {
      background-color: #c00;
    }

    .register {
      display: block;
      margin: 10px 0;
      padding: 10px;
      width: 100%;
      border-radius: 5px;
      border: none;
      background-color: #f00;
      color: #fff;
      text-align: center;
      text-decoration: none;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .register:hover {
      background-color: #c00;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
  </style>
</head>

<body>
  <div class="container">
    <form id="loginForm" onsubmit="return handleLogin()">
      <h1>Login Form</h1>
      <input type="text" id="username" placeholder="Username" />
      <input type="password" id="password" placeholder="Password" />
      <input type="submit" value="Login" />
      <input type="button" value="Register" class="register" onclick="handleRegistration()" />
    </form>
  </div>

  <script>
    function handleLogin() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;

      // Replace this with your actual logic for handling login
      // For simplicity, we're just checking if the username and password are non-empty
      if (username && password) {
        // Redirect to casereportsystem.html
        window.location.href = "casereportsystem.php";
      } else {
        // If login fails, you can display an error message
        alert("Invalid credentials. Please try again.");
      }

      // Prevent the form from actually submitting
      return false;
    }

    function handleRegistration() {
      // Replace this alert with your actual logic for handling registration
      alert("Redirecting to registration page...");

      // You can also redirect the user to the registration page
      window.location.href = "registerform.php";
    }
  </script>
</body>
<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $username = $_POST['username'];
  $password = $_POST['password'];

  // Perform authentication using prepared statements
  $stmt = $conn_loginform->prepare("SELECT * FROM users WHERE username = ? AND
  password = ?");
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $stmt->store_result();
  if ($stmt->num_rows > 0) { // Authentication successful
    echo json_encode(['success' => true]);
  } else { // Authentication failed echo
    json_encode(['success' => false]);
  }
  $stmt->close();
} else {
  echo
  json_encode(['success' => false, 'message' => 'Invalid request.']);
}
$conn_loginform->close(); ?>

</html>