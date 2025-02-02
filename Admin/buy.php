<?php
// Include database connection code here
$servername = "localhost";
$username = "root";
$password = "";
$database = "library_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

include("navbar.php");

// Fetch total earnings
$query = "SELECT SUM(bprice) AS sum FROM buy";
$query_result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($query_result);
$sum = $row['sum'];

// Fetch total orders count
$count_query = "SELECT COUNT(*) AS total_orders FROM buy";
$count_result = mysqli_query($conn, $count_query);
$count_row = mysqli_fetch_assoc($count_result);
$count = $count_row['total_orders'];
?>

<html>

<body>
    <div class="container-fluid row-col-2">
        <div class="row row-col-2 ml-2">
            <div class="col-3">
                <!-- Your admin details and statistics -->
                <!-- Assuming you have admin details to display -->
                <div class="col-md-6 ml-5 mt-5 text-center">
                    <img src="http://127.0.0.1/project/img/admin.png" class="rounded img-fluid img-thumbnail" width="80%">
                </div>
                <dl class="row">
                    <!-- Display admin details -->
                    <!-- Assuming you have a way to get admin name -->
                    <dt class="col-sm-5 mt-3">USER NAME</dt>
                    <dd class="col-sm-7 mt-3">Sagar Taware</dd>

                    <!-- Display total orders count -->
                    <dt class="col-sm-5 mt-3">TOTAL ORDERS</dt>
                    <dd class="col-sm-7 mt-3"><?php echo '<b>'.$count.'</b>'; ?></dd>

                    <!-- Display total earnings -->
                    <dt class="col-sm-5 mt-3">TOTAL EARNS</dt>
                    <dd class="col-sm-7 mt-3"><?php echo '<b>'.$sum.'</b>'; ?></dd>
                </dl>
            </div>
            <!-- Display orders table -->
            <div class="col-9">
                <table class='table table-bordered table-hover mt-2 mt-3'>
                    <thead class='text-center'>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>User Name</th>
                            <th scope='col'>Product Name</th>
                            <th scope='col'>Total Price</th>
                            <th scope='col'>Total Quantity</th>
                            <th scope='col'>Buy Time</th>
                            <th scope='col'>Order Address</th>
                            <th scope='col'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetch and display order details
                        $sql = "SELECT * FROM buy";
                        $res = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['busername']}</td>
                                    <td>{$row['pname']}</td>
                                    <td>{$row['bprice']}</td>
                                    <td>{$row['uquntity']}</td>
                                    <td class='text-center'>{$row['buytime']}</td>
                                    <td>{$row['baddress']}</td>
                                    <td><a href='action.php?orderid={$row['id']}' class='btn btn-primary text-center'>Get Action</a></td>
                                </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
