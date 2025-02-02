<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-image: url('bglo.png');
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-container {
      background-color: rgba(200, 200, 200, 0.5);
      padding: 20px 40px 50px 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      max-width: 330px;
      width: 100%;
      text-align: center;
    }

    .foralign {
      text-align: left;
    }

    .button {
      height: 40px;
      width: 90px;
      background-color: transparent;
      cursor: pointer;
      border: 1.5px solid gold;
      overflow: hidden;
      border-radius: 25px;
      color: #333;
      transition: all 0.5s ease-in-out;
    }

    .btn-txt {
      z-index: 1;
      font-weight: 600;
      font-size: 17px;
      letter-spacing: 3px;
    }

    .type1::after {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      transition: all 0.5s ease-in-out;
      background-image: linear-gradient(45deg, gold, white);
      border-radius: 30px;
      visibility: hidden;
      height: 10px;
      width: 10px;
      z-index: -1;
    }

    .button:hover {
      box-shadow: 1px 1px 150px gold;
      color: black;
      border: 0px solid gold;
    }

    .type1:hover::after {
      visibility: visible;
      transform: scale(75) translateX(1px);
      border: 2px solid gold;
    }
  </style>
</head>
<body>
  <div class="login-container type1">
    <h2>Login</h2>
    <form id="loginForm" method="post">
      <div class="foralign">
        <b><label for="username">Username:</label></b>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
      </div>
      <div class="foralign">
        <b><label for="password">Password:</label></b>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="foralign">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="showPassword" onclick="togglePasswordVisibility()">
          <label class="form-check-label" for="showPassword"><b>Show Password</b></label>
        </div>
      </div><br>
      <button class="button type1" name="loginBtn">
        <span class="btn-txt"><b>Login</b></span>
      </button>
    </form>
    <p><b>Don't have an account? <a href="registration.php">Register</a></b></p>
  </div>

  <script>
    function togglePasswordVisibility() {
      var passwordInput = document.getElementById('password');
      passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
    }
  </script>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      session_start();

      // Database connection parameters
      $db_host = "localhost";
      $db_user = "root";
      $db_password = "";
      $db_name = "library_system";

      // Create a database connection
      $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

      // Check the connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Retrieve user input from the form
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Query to check if the username and password exist in the database
      $sql = "SELECT * FROM cust_regis WHERE username = '$username' AND password = '$password'";
      $result = $conn->query($sql);

      // Check if there is a matching row
      if ($result->num_rows > 0) {
          // Login successful
          $_SESSION['username'] = $username;
          echo '<script>alert("Login successful!"); window.location.href = "index.php";</script>';
      } else {
          // Username or password is incorrect
          echo '<script>alert("Username or password is incorrect. Please try again.");</script>';
      }

      // Close the database connection
      $conn->close();
  }
  ?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
