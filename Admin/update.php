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

// Initialize variables
$name = "";
$type = "";
$description = "";
$price = "";

// Check if the Product ID is provided in the URL
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Fetch the product details from the database based on the provided ID
    $sql_select = "SELECT * FROM product WHERE ID='$product_id'";
    $result = $conn->query($sql_select);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
        // Assign fetched values to variables
        $name = $product['name'];
        $type = $product['type'];
        $description = $product['description'];
        $price = $product['price'];
    } else {
        // echo "Product not found!";
    }
} else {
    // echo "Product ID is missing!";
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Update Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<style>
    .shdwss {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    }

    .txt {
        color: #121212;
        text-shadow: 2px 7px 5px rgba(0,0,0,0.3), 
                    0px -4px 10px rgba(255,255,255,0.3);
    }
</style>

<?php include("navbar.php"); ?>
<br><br>
<body style="background-color: ghostwhite;">
    <div class="container">
        <h2 class="text-center txt" style="font-family: Times new romans; background-color: ghostwhite;"><i>Update Product</i></h2><br><br>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="ID"><b>Product ID:</b></label>
                        <input style="background-color:ghostwhite;" type="text" class="form-control shdwss" name="ID" required placeholder="Enter the Product ID" value="<?php echo isset($product_id) ? $product_id : ''; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input style="background-color:ghostwhite;" type="text" class="form-control shdwss" name="name" required value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="type">Product Type:</label>
                        <input style="background-color:ghostwhite;" type="text" class="form-control shdwss" name="type" required value="<?php echo $type; ?>">
                    </div>
                    <div class="form-group">
                        <label for="image">Product Image:</label>
                        <input style="background-color:ghostwhite;" type="file" class="form-control shdwss" name="image">
                    </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea style="background-color:ghostwhite;" class="form-control shdwss" name="description" rows="4" required><?php echo $description; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input style="background-color:ghostwhite;" type="text" class="form-control shdwss" name="price" required value="<?php echo $price; ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-success btn-block shdwss" name="update">Update Data</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ID = $_POST['ID'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        // Check if a new image file is uploaded
        if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $image = $_FILES['image']['name'];
            $tmp_image = $_FILES['image']['tmp_name'];

            // Upload image to server
            $upload_path = "upload/";
            $target_image = $upload_path . $image;
            move_uploaded_file($tmp_image, $target_image);

            // Build the SQL query to update the image in the database
            $sql = "UPDATE product SET name='$name', type='$type', description='$description', image='$target_image', price='$price' WHERE ID='$ID'";
        } else {
            // Build the SQL query to update other fields without changing the image
            $sql = "UPDATE product SET name='$name', type='$type', description='$description', price='$price' WHERE ID='$ID'";
        }

        // Execute the SQL query
        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Product Updated successfully!"); window.location.href = "productdetails.php";</script>';
        } else {
            echo "<script>alert('Update Product Error');</script>" . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>
