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

// Fetch data from the database
$sql = "SELECT * FROM product WHERE type = 'veer collection'";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .item-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .item {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .item:hover {
            transform: scale(1.05);
        }

        .item img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .details {
            text-align: left;
        }

        .details h3 {
            margin-top: 10px;
            margin-bottom: 5px;
            font-size: 1.1em;
        }

        .details p {
            margin: 0;
            font-size: 0.9em;
            color: #555;
        }

        .details .price {
            font-weight: bold;
            color: #009688;
            font-size: 1.1em;
        }

        .action-buttons {
            display: flex;
            justify-content: right;
            margin-top: 10px;
        }

        /* Button buy and add to cart */
        .bt:link,
        .bt:visited {
            height: 29px;
            width: 50px;
            color: black;
            text-decoration: none;
            border: 1.5px solid gold;
            background-image: linear-gradient(45deg, gold, white);
            padding: 1px 10px;
            background-color: transparent;
            border-radius: 1000px;
            display: inline-block;
            transition: all .4s;
            position: relative;
        }

        .bt:hover {
            transform: translateY(-5px);
            box-shadow: 1px 0px gold;
        }

        .bt:active {
            transform: translateY(-3px);
        }

        .bt::after {
            content: "";
            display: inline-block;
            height: 100%;
            width: 100%;
            border-radius: 100px;
            top: 0;
            left: 0;
            position: absolute;
            z-index: -1;
            transition: all .5s;
        }

        .bt:hover::after {
            background-image: linear-gradient(45deg, gold, white);
            transform: scaleX(3) scaleY(0.5);
            opacity: 0;
        }

        .txtshd {
            text-shadow: 0 0 2px gold, 0 0 2px grey;
            color: lightgrey;
        }

        .txt {
            text-shadow: 0 0 2px gold, 0 0 2px gold;
            color: gold;
        }
    </style>
    <title>Product Collection</title>
</head>

<body>
<?php include_once('navbar.php'); ?>

<center>
    <h2 id="diamondring" class="txtshd"><i>VEER SAVARKAR</i></h2>
    <hr class="hr" style="border:2px solid silver; width: 280px; border-bottom: white;">
</center>

<div class="item-container">
    <?php
    if ($result->num_rows > 0) {
        while ($product = $result->fetch_assoc()) {
            ?>
            <div class="item">
                <img src="<?php echo !empty($product['image']) ? $product['image'] : 'placeholder.png'; ?>" alt="<?php echo $product['name']; ?> Image">
                <div class="details">
                    <h3><?php echo $product["name"]; ?></h3>
                    <p><?php echo $product["description"]; ?></p>
                    <p class="price">Rs. <?php echo $product["price"]; ?></p>
                </div>
                <div class="action-buttons">
                    <a href="order.php?product_id=<?php echo $product['ID']; ?>" class="bt">Buy</a>
                </div>
            </div>
        <?php }
    } else {
        echo "<p>No products found</p>";
    }
    $conn->close();
    ?>
</div>

<br>
<?php include_once('footer.php'); ?>

</body>
</html>
