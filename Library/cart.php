<?php
// Include database connection
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
// Include any necessary CSS or navigation files


echo '
    <table class="table">
        <thead class="text-center bg-info table-bordered table-hover mt-2 mt-3">
            <tr>
                <th scope="col">PRODUCT NAME</th>
                <th scope="col">PICTURE</th>
                <th scope="col">PRICE</th>
                <th scope="col">ORDER NOW</th>
            </tr>
        </thead>
        <tbody>';

// Fetch the user's cart items from the database
$sql = "SELECT * FROM cart WHERE user='$un'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Fetch product details from each cart entry
        $pid = $row['cid'];
        $pname = $row['name'];
        $img = $row['img'];
        $price = $row['price'];

        // Display each cart item in a table row
        echo '
        <tr class="my-2 text-center" style="background-color: whitesmoke;">
            <td class="text-dark my-1">' . htmlspecialchars($pname) . '</td>
            <td class="text-dark my-1"><img src="' . htmlspecialchars($img) . '" alt="Product Image" width="200"></td>
            <td class="text-dark my-1">Rs. ' . htmlspecialchars($price) . '</td>
            <td class="text-dark my-1"><a class="btn btn-primary my-2" href="order.php?product_id=' . htmlspecialchars($pid) . '">Order Now</a></td>
        </tr>';
    }
} else {
    echo '<tr><td colspan="4" class="text-center">Your cart is empty.</td></tr>';
}

echo '
        </tbody>
    </table>';
?>

<!-- Include any additional footer CSS or JavaScript if necessary -->
<link rel="stylesheet" href="path/to/your/style.css"> <!-- Update this path with your actual CSS file -->
