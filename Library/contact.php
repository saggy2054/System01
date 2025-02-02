<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/jquery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        body {
            background-image: url('bglo.png'); /* Specify the path to your background image */
            background-size: cover;
            background-position: center;
            opacity: 0.8; /* Adjust the opacity as needed */
        }

        .contact-form {
            max-width: 400px;
            margin: 0 0 0 500px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
            font-size: 14px;
        }

        .form-control {
            width: calc(100% - 20px);
            padding: 10px;
            font-size: 14px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        .btn-primary {
            font-size: 14px;
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .social-icons {
            text-align: center;
            margin-top: 15px;
        }

        .social-icons a {
            color: #007bff;
            font-size: 18px;
            margin: 0 5px;
        }
    </style>
</head>
<body>
<?php include_once('navbar.php'); ?>
<br><br><br><br>
<div class="contact-form">
    <h3>Contact Us</h3>
    <form  method="POST" action="">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="contact"> Email:</label>
            <input type="text" name="gmail" id="contact" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="text">Message:</label>
            <textarea name="message" id="message" class="form-control" rows="4" required></textarea>
        </div>
        <div class="text-center form-group"> 
            <button type="submit" class="btn btn-primary">Send Message</button>
        </div>

        <a href="index.php">
        <div class="text-left"> 
            <button type="button" class="btn btn-primary">Back</button>
        </div></a>
    </form>
    <div class="social-icons">
        <a href="mailto:sagataware203@gmail.com"><img src="gmail.png" alt="WhatsApp Logo" width="70" height="50"></a>

        <a href="https://api.whatsapp.com/send?phone=7387613425" target="_blank" rel="noopener noreferrer">
            <img src="whatsapp.png" alt="WhatsApp Logo" width="70" height="50">
        </a>               
    </div>
</div>
<br><br>
</body>

<?php
// Establishing a database connection
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "library_system"; // Change this to your database name

// Create connection
$cann = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($cann->connect_error) {
    die("Connection failed: " . $cann->connect_error);
}

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $address = $_POST['address'];
    $gmail = $_POST['gmail'];
    $message = $_POST['message'];

    // Prepare and execute SQL query
    $sql = "INSERT INTO contact (username, address, gmail, message) VALUES ('$username', '$address', '$gmail', '$message')";
    if ($cann->query($sql) === TRUE) {
        echo '<script>alert("Message Delivered Successfully !!"); window.location.href = "index.php";</script>';
        exit();
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.");</script>';
    }
}

// Close the database connection
$cann->close();
?>


</html>