<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh; /* Full viewport height */
    }

    .login-container {
      width: 300px;
      height: 310px;
      padding: 15px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      max-width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #0056b3;
    }

    button:focus {
      outline: none;
    }

    
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Admin Login</h2>
    <br>
    <form id="loginForm" action="#">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="button" onclick="validateLogin()">Login</button>
    </form>
  </div>

  <script>
    function validateLogin() {
      var usernameInput = document.getElementById('username').value;
      var passwordInput = document.getElementById('password').value;

      // Check if username and password match the specified credentials
      if (usernameInput === 'sagar' && passwordInput === '2054') {
        alert("Login successful!"); window.location.href = "home.php";
        // Redirect to the admin dashboard or perform further actions
      } else {
        alert('Invalid username or password. Please try again.');
        // Clear the input fields
        document.getElementById('username').value = '';
        document.getElementById('password').value = '';
      }
    }
  </script>
</body>
</html>
