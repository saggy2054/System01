<?php

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

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
    $username= $_POST['us'];
    $mobile = $_POST['mb'];
    $email = $_POST['eid'];
    $password = $_POST['pass'];
    $address = $_POST['addr'];

    // Hash the password before storing it in the database
    

    // Insert data into the database
    $sql = "INSERT INTO cust_regis(username, mobile, email, password, address) 
            VALUES ('$username', '$mobile', '$email', '$password', '$address')";

    if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Registration successful!"); window.location.href = "index.php";</script>';
    } else {
      echo '<script>alert("Registration unsuccessful. Please try again.");</script>';

    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Registration</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-image: url('bglo.png'); /* Replace with the actual path to your image */
      background-size: cover;
      background-position: center;
      height: 50vh;
      align-items: center;
      justify-content: center;
    }

    .button {
  height: 40px;
  width: 109px;
  position: relative;
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
  font-size:17px;
  letter-spacing: 3px;
}

.type1::after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  transition: all 0.5s ease-in-out;
  background-image:linear-gradient(45deg, gold, white);
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

    .register-container {
  background-color: rgba(200, 200, 200, 0.5); /* Adjust the opacity as needed */
  padding: 15px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  max-width: 330px;
  width: 100%; /* Adjust the width as needed */
  text-align: center;
  margin: 0 10px 3px 550px; /* Center horizontally */
}

    .foralign{
     
      text-align: left;

    }
    

    /* Add any additional styles for the login form */
  </style>
</head>
<body>


<br><br>
  <div class="register-container type1">
    <h2>Register</h2>
    <form id="register" method="POST">

    <div class="foralign">
      
        <input type="text" class="form-control" name="us" id="username" placeholder="Username" required maxlength="10">
      </div><br>
      
      <div class="foralign">
      
        <input type="text" class="form-control" name="mb" id="mobile" placeholder="Mobile Number" required maxlength="10">
      </div><br>
      <div class="foralign">
      
        <input type="text" class="form-control" name="eid" id="email" placeholder="Email" required>
      </div><br>

      <div class="foralign">
       
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter your password" required>
      </div><br>

      <div class="foralign">
      
      <input type="text" class="form-control" name="addr" id="address" placeholder="Address" required>
    </div><br>
      <button type="submit" class="button type1" name="submit">
              <span class="btn-txt" onclick="register()"><b>Register</b></span>
            </button>
    <p><b>You Already Have Account &nbsp;&nbsp;<a href="custlogin.php">login</a></b></p>
    </form>

    

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
</body>

</html>
