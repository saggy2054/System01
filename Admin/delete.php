<?php
include("dbconn.php");
if (isset($_POST['delete'])) {
    $id = $_POST['ID'];

    // Prepare and execute the delete query
    $stmt = $cann->prepare("DELETE FROM product WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Product Delete successfully!');window.location.href = 'admindatafeachphp.php';</script>";
    } else {
        echo "<script>alert('No record found with the provided ID');</script>";
    }   

    $stmt->close();
}

// Fetch data from the database
$sql = "SELECT * FROM product";
$result = $cann->query($sql);
?>

<!DOCTYPE html>
<html>
<?php include("navbar.php"); ?>
<br><br>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Admin Panel</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['video']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td>
                            <form method="POST" action="">
                                <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
                                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
// Close the database connection
$cann->close();
?>
