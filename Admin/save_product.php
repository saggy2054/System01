<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<?php include('navbar.php'); ?>
    <div class="container">
        <h1><center>Add Product</center></h1>
        <form action="home.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Book Name in Marathi:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="description">Book Name in English:</label>
                <input type="text" class="form-control" name="description" required>
            </div>
            <div class="form-group">
                <label for="image">Product Image:</label>
                <input type="file" class="form-control" name="image" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" name="price" required>
            </div>
            <button type="submit" class="btn btn-primary">Save Product</button>
        </form>
    </div>

    <?php
    // Database Connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "library_system";

    $conn = new mysqli($servername, $username, $password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Save product details in database
        $name = $_POST['name'];
        $description = $_POST['description'];
        $image = $_FILES['image']['name'];
        $tmp_image = $_FILES['image']['tmp_name'];
        $price = $_POST['price'];

        // Upload image to server
        $upload_path = "uploads/";
        $target_image = $upload_path . basename($image);
        if (move_uploaded_file($tmp_image, $target_image)) {
            // Insert product details into the database
            $sql = "INSERT INTO product (name, description, image, price) VALUES ('$name','$description', '$target_image', '$price')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Book added successfully!');</script>";
            } else {
                echo "<script>alert('Error: " . $conn->error . "');</script>";
            }
        } else {
            echo "<script>alert('Failed to upload image.');</script>";
        }
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>
