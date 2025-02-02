<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Adjust styles as needed */
        .form-group {
            margin-bottom: 20px;
        }

        .shdwss {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;   
        }        

        .txt {
            color: #121212;
            text-shadow: 2px 7px 5px rgba(0,0,0,0.3), 
            0px -4px 10px rgba(255,255,255,0.3);
        }
    </style>
</head>
<?php include('navbar.php');?>
<br><br>
<body style="background-color: ghostwhite;">
    <div class="container">
        <h2 class="text-center txt" style="font-family: Times new romans; background-color: ghostwhite;"><i>Add &nbsp;Product</i></h2><br>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST" enctype="multipart/form-data" style="font-family:Times new romans;">
                    <div class="form-group">
                        <label for="name" style="font-size: 18px;">Product Name:</label>
                        <input style="background-color:ghostwhite;" type="text" class="form-control shdwss" name="name" placeholder="Enter Product Name.." required>
                    </div>
                    <div class="form-group">
                        <label for="type" style="font-size: 18px;">Author:</label>
                        <input style="background-color:ghostwhite;" type="text" class="form-control shdwss" name="type" placeholder="Enter Author Name.." required>
                    </div>
                    <div class="form-group">
                        <label for="price" style="font-size: 18px;">Price:</label>
                        <input style="background-color:ghostwhite;" type="text" class="form-control shdwss" name="price" placeholder="Enter Price.." required>
                    </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <label style="font-family:Times new romans;font-size: 18px;" for="description">Product Description:</label>
                        <textarea style="background-color:ghostwhite;" class="form-control shdwss" name="description" rows="5" placeholder="Enter Product Description.." required></textarea>
                    </div>
                    <div class="form-group">
                        <label style="font-family:Times new romans;font-size: 18px;" for="image">Product Image:</label>
                        <input style="background-color:ghostwhite;" type="file" class="form-control shdwss" name="image" required>
                    </div>
                    <button style="font-family:Times new romans;" type="submit" class="btn btn-success shdwss">Save Product</button>
                </form>
            </div>
        </div>
    </div>

    <?php
     // Establishing a database connection
     $servername = "localhost"; // Change this to your database server name
     $username = "root"; // Change this to your database username
     $password = ""; // Change this to your database password
     $dbname = "library_system"; // Change this to your database name

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);

     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Save product details in database
        $name = $_POST['name'];
        $description = $_POST['description'];
        $type = $_POST['type'];
        $image = $_FILES['image']['name'];
        $tmp_image = $_FILES['image']['tmp_name'];
        $price = $_POST['price'];

        // Upload image to server
        $upload_path = "uploadz/";
        $target_image = $upload_path . $image;
        move_uploaded_file($tmp_image, $target_image);

        // Insert product details into the database
        $sql = "INSERT INTO product (name, type, description, image, price) VALUES ('$name', '$type', '$description', '$target_image', '$price')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Product added successfully!');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>
