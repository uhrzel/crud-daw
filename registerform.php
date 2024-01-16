<!DOCTYPE html>
<html>

<head>
  <title>Registration Form</title>
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
    input[type="password"],
    select {
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

    .error-message {
      color: #f00;
      margin-top: 10px;
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
    <form id="registrationForm" onsubmit="return handleRegistration()">
      <h1>Registration Form</h1>
      <input type="text" id="username" placeholder="Username" />
      <input type="password" id="password" placeholder="Password" />
      <select id="role">
        <option value="" disabled selected>Select your role</option>
        <option value="student">Student</option>
        <option value="counselor">Guidance Counselor</option>
      </select>
      <input type="text" id="id" placeholder="Enter your ID" />
      <input type="submit" value="Register" />
      <p class="error-message" id="errorMessage"></p>
    </form>
  </div>

  <script>
    function handleRegistration() {
      // Capture form data
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      var role = document.getElementById("role").value;
      var id = document.getElementById("id").value;

      // Check if any field is empty
      if (!username || !password || !role || !id) {
        document.getElementById("errorMessage").innerText =
          "All fields are required.";
        return false;
      }

      // Replace this alert with your actual logic for handling registration
      alert(
        "Registration data submitted:\nUsername: " +
        username +
        "\nPassword: " +
        password +
        "\nRole: " +
        role +
        "\nID: " +
        id
      );

      // Redirect to the login form
      window.location.href = "index.php";

      // Prevent the form from actually submitting
      return false;
    }
  </script>
  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  include('config.php');

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you're using POST method in your form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $id = $_POST['id'];

    // Check if the username is already taken
    $checkUsernameQuery = "SELECT * FROM registration WHERE username = '$username'";
    $checkUsernameResult = $conn_registration->query($checkUsernameQuery);
    if ($checkUsernameResult->num_rows > 0) {
      echo json_encode([
        'success' => false,
        'message' => 'Username already exists.'
      ]);
    } else {
      $insertUserQuery = "INSERT INTO registration (username,
    password, role, id) VALUES ('$username', '$password', '$role', '$id')";
      if ($conn_registration->query($insertUserQuery) === TRUE) {
        echo
        json_encode(['success' => true, 'message' => 'Registration successful.']);
      } else {
        echo json_encode(['success' => false, 'message' => 'Error registering
    user: ' . $conn_registration->error]);
      }
    }
  } else {
    echo
    json_encode(['success' => false, 'message' => 'Invalid request.']);
  }
  $conn_registration->close(); ?>
</body>

</html>