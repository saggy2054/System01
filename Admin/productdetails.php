<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body,
        .intro {
            height: 100%;
        }

        table td,
        table th {
            max-width: 200px; /* Set a maximum width for table cells */
            overflow: hidden; /* Hide overflow content */
            text-overflow: ellipsis; /* Display an ellipsis (...) to indicate overflow */
            white-space: nowrap; /* Prevent text from wrapping to the next line */
        }

        .mask-custom {
            background: rgba(24, 24, 16, .2);
            border-radius: 2em;
            backdrop-filter: blur(25px);
            border: 2px solid rgba(255, 255, 255, 0.05);
            background-clip: padding-box;
            box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
        }

        /* Center alignment */
        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .shdww {
            box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
        }

        .txt {
            color: #121212;
            text-shadow: 2px 7px 5px rgba(0,0,0,0.3), 0px -4px 10px rgba(255,255,255,0.3);
        }
    </style>
</head>
<body style="background-color: ghostwhite; font-family: Times New Roman;">
<?php include_once('navbar.php'); ?>
<br><br>
<center><h2 style="font-family: Times New Roman; background-color: ghostwhite;" class="txt"><i>Product Details</i></h2></center><br>
<section class="intro">
    <div class="">
        <div class="mask d-flex align-items-center h-100">
            <div class="container shdw">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card mask-custom">
                            <div class="card-body" style="background-color: ghostwhite;">
                                <!-- Search Form -->
                                <form method="GET" action="" class="form-inline">
                                    <div class="form-group mr-2">
                                        <select style="background-color: ghostwhite;" class="form-control shdww" name="search_by">
                                            <option value="name">Product Name</option>
                                            <option value="type">Product Type</option>
                                            <option value="price">Product Price</option>
                                        </select>
                                    </div>
                                    <div class="form-group mr-2">
                                        <input style="background-color: ghostwhite;" type="text" name="search_value" class="form-control shdww" placeholder="Search term">
                                    </div>
                                    <button type="submit" class="btn btn-success">Search</button>
                                </form><br>
                                <div class="table-responsive">
                                    <table class="table table-borderless text-white mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="color: black; font-size: 18px;">ID</th>
                                                <th scope="col" style="color: black; font-size: 18px;">Name</th>
                                                <th scope="col" style="color: black; font-size: 18px;">Author</th>
                                                <th scope="col" style="color: black; font-size: 18px;">नाव</th>
                                                <th scope="col" style="color: black; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image</th>
                                                <th scope="col" style="color: black; font-size: 18px;">Price</th>
                                                <th scope="col" style="color: black; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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

                                            // Handle search query
                                            if (isset($_GET['search_value']) && isset($_GET['search_by'])) {
                                                $search_value = $_GET['search_value'];
                                                $search_by = $_GET['search_by'];

                                                // Fetch data from the database
                                                if ($search_by === 'price') {
                                                    $sql = "SELECT * FROM product WHERE $search_by <= $search_value";
                                                } else {
                                                    $sql = "SELECT * FROM product WHERE $search_by LIKE '%$search_value%'";
                                                }
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    while ($product = $result->fetch_assoc()) { ?>
                                                        <tr>
                                                            <td style="color: black;"><br><?php echo $product["ID"]; ?></td>
                                                            <td style="color: black;"><br><?php echo $product["name"]; ?></td>
                                                            <td style="color: black;"><br><?php echo $product["type"]; ?></td>
                                                            <td style="color: black;"><br><?php echo $product["description"]; ?></td>
                                                            <td>
                                                                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?> Image" style="width: 100px; height: auto;">
                                                            </td>
                                                            <td style="color: black;"><br><?php echo $product["price"]; ?></td>
                                                            <td><br>
                                                                <a href="update.php?id=<?php echo $product['ID']; ?>" class="btn btn-primary">Update</a>
                                                                <form method="POST" style="display: inline;">
                                                                    <input type="hidden" name="delete_id" value="<?php echo $product['ID']; ?>">
                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                } else {
                                                    echo "<tr><td colspan='7' class='centered'>Product not found!</td></tr>";
                                                }
                                            } else {
                                                // Display all products if no search is performed
                                                $sql = "SELECT * FROM product";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    while ($product = $result->fetch_assoc()) { ?>
                                                        <tr>
                                                            <td style="color: black;"><br><?php echo $product["ID"]; ?></td>
                                                            <td style="color: black;"><br><?php echo $product["name"]; ?></td>
                                                            <td style="color: black;"><br><?php echo $product["type"]; ?></td>
                                                            <td style="color: black;"><br><?php echo $product["description"]; ?></td>
                                                            <td>
                                                                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?> Image" style="width: 100px; height: auto;">
                                                            </td>
                                                            <td style="color: black;"><br><?php echo $product["price"]; ?></td>
                                                            <td><br>
                                                                <a href="update.php?id=<?php echo $product['ID']; ?>" class="btn btn-primary">Update</a>
                                                                <form method="POST" style="display: inline;">
                                                                    <input type="hidden" name="delete_id" value="<?php echo $product['ID']; ?>">
                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                } else {
                                                    echo "<tr><td colspan='7' class='centered'>No products available!</td></tr>";
                                                }
                                            }
                                            // Close the database connection
                                            $conn->close();
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

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
// Check if a delete request is sent
if(isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];

    // Perform the delete operation
    $delete_query = "DELETE FROM product WHERE ID = $delete_id";
    if ($conn->query($delete_query) === TRUE) {
        echo "<script>alert('Product deleted successfully');</script>";
        // You may redirect the user or do any additional action after successful deletion
    } else {
        echo "<script>alert('Error deleting product: " . $conn->error . "');</script>";
    }
}
?>
