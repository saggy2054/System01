<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Form</title>
    <style>
        .form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-width: 350px;
            background-color: #fff;
            padding: 10px;
            border-radius: 10px;
            position: relative;
            margin: 0 auto; /* Center the form horizontally */
        }

        .message {
            color: rgba(88, 87, 87, 0.822);
            font-size: 14px;
        }

        .flex {
            display: flex;
            width: 100%;
            gap: 6px;
        }

        .form label {
            position: relative;
        }

        .form label .input {
            width: 100%;
            padding: 10px 10px 20px 10px;
            outline: 0;
            border: 1px solid rgba(105, 105, 105, 0.397);
            border-radius: 5px;
        }

        .form label .input + span {
            position: absolute;
            left: 10px;
            top: 15px;
            color: grey;
            font-size: 0.9em;
            cursor: text;
            transition: 0.3s ease;
        }

        .form label .input:placeholder-shown + span {
            top: 15px;
            font-size: 0.9em;
        }

        .form label .input:focus + span, .form label .input:valid + span {
            top: 30px;
            font-size: 0.7em;
            font-weight: 600;
        }

        .form label .input:valid + span {
            color: green;
        }

        .input01 {
            width: 100%;
            padding: 10px 10px 20px 10px;
            outline: 0;
            border: 1px solid rgba(105, 105, 105, 0.397);
            border-radius: 5px;
        }

        .form label .input01 + span {
            position: absolute;
            left: 10px;
            top: 50px;
            color: grey;
            font-size: 0.9em;
            cursor: text;
            transition: 0.3s ease;
        }

        .form label .input01:placeholder-shown + span {
            top: 40px;
            font-size: 0.9em;
        }

        .form label .input01:focus + span, .form label .input01:valid + span {
            top: 50px;
            font-size: 0.7em;
            font-weight: 600;
        }

        .form label .input01:valid + span {
            color: green;
        }

        .fancy {
            background-color: transparent;
            border: 2px solid #cacaca;
            border-radius: 0px;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-weight: 390;
            letter-spacing: 2px;
            margin: 0;
            outline: none;
            overflow: visible;
            padding: 8px 30px;
            position: relative;
            text-align: center;
            text-decoration: none;
            text-transform: none;
            transition: all 0.3s ease-in-out;
            user-select: none;
            font-size: 13px;
        }

        .fancy::before {
            content: " ";
            width: 1.7rem;
            height: 2px;
            background: #cacaca;
            top: 50%;
            left: 1.5em;
            position: absolute;
            transform: translateY(-50%);
            transform: translateX(230%);
            transform-origin: center;
            transition: background 0.3s linear, width 0.3s linear;
        }

        .fancy .text {
            font-size: 1.125em;
            line-height: 1.33333em;
            padding-left: 2em;
            display: block;
            text-align: left;
            transition: all 0.3s ease-in-out;
            text-transform: lowercase;
            text-decoration: none;
            color: #818181;
            transform: translateX(30%);
        }

        .fancy .top-key {
            height: 2px;
            width: 1.5625rem;
            top: -2px;
            left: 0.625rem;
            position: absolute;
            background: white;
            transition: width 0.5s ease-out, left 0.3s ease-out;
        }

        .fancy .bottom-key-1 {
            height: 2px;
            width: 1.5625rem;
            right: 1.875rem;
            bottom: -2px;
            position: absolute;
            background: white;
            transition: width 0.5s ease-out, right 0.3s ease-out;
        }

        .fancy .bottom-key-2 {
            height: 2px;
            width: 0.625rem;
            right: 0.625rem;
            bottom: -2px;
            position: absolute;
            background: white;
            transition: width 0.5s ease-out, right 0.3s ease-out;
        }

        .fancy:hover {
            color: white;
            background: #cacaca;
        }

        .fancy:hover::before {
            width: 1.5rem;
            background: white;
        }

        .fancy:hover .text {
            color: white;
            padding-left: 1.5em;
        }

        .fancy:hover .top-key {
            left: -2px;
            width: 0px;
        }

        .fancy:hover .bottom-key-1,
        .fancy:hover .bottom-key-2 {
            right: 0;
            width: 0;
        }

        .container {
            display: flex;
            justify-content: left;
            align-items: flex-start;
            gap: 20px;
            margin-top: 50px;
        }

        .item-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .item {
            display: flex;
            gap: 20px;
        }

        .details {
            flex: 1;
        }

        #orderFormContainer {
            max-width: 350px;
            width: 100%;
        }

        .top {
            padding-top: 30px;
        }

        .shdww {
            box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
        }
    </style>
</head>
<body>

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

$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;

$sql = "SELECT * FROM product WHERE id = '$product_id'";
$result = $conn->query($sql);

// Initialize variables to hold product details
$product_name = "";
$product_description = "";
$product_price = "";
$product_image = ""; // New variable for the image

// Fetch product details if the product ID is valid
if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
    $product_name = $product["name"];
    $product_description = $product["description"];
    $product_price = $product["price"];
    $product_image = $product["image"]; // Fetch the image path
}
?>

<?php include_once('navbar.php'); ?>

<div class="container">

    <div class="item-container">
        <div class="item top">
            <img src="<?php echo $product_image; ?>" alt="<?php echo $product_name; ?> Image" style="width:300px; height: auto;">
            <div class="details"><br>
                <h4 style="font-style: Times New Roman;"><i><?php echo $product_name; ?></i></h4>
                <p style="width:300px;"><i><?php echo $product_description; ?></i></p>
                <p class="price"><b>Rs. <?php echo $product_price; ?></b></p>
            </div>
        </div>
    </div>
<br><br>
    <!-- Order form container -->
    <div id="orderFormContainer">
        <!-- Order form -->
        <form class="form" method="POST" action="order.php">
            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
            <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
            <input type="hidden" name="product_description" value="<?php echo $product_description; ?>">
            <input type="hidden" name="product_price" value="<?php echo $product_price; ?>">

            <div class="flex">
                <label>
                    <input required="" placeholder="" type="text" class="input shdww" name="firstname">
                    <span>First Name</span>
                </label>

                <label>
                    <input required="" placeholder="" type="text" class="input shdww" name="lastname">
                    <span>Last Name</span>
                </label>
            </div>  

            <label>
                <input required="" placeholder="" type="email" class="input shdww" name="gmail">
                <span>Email</span>
            </label> 

            <label>
                <input required="" type="tel" placeholder="" class="input shdww" name="pno">
                <span>Contact Number</span>
            </label>
            <label>
                <textarea required="" rows="3" placeholder="" class="input01 shdww" name="addr"></textarea>
                <span>Proper Address</span>
            </label>
            
            <button class="fancy shdww" name="submit">
                <span class="top-key"></span>
                <span class="text">Submit</span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
            </button>
        </form>
    </div>
</div>
<br><br><br>

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
if (isset($_POST['submit'])) {
    // Retrieve order form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gmail = $_POST['gmail'];
    $pno = $_POST['pno'];
    $addr = $_POST['addr'];
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];

    // Insert order form and product details into database
    $sql = "INSERT INTO cust_order (firstname, lastname, gmail, pno, addr, product_id, product_name, product_description, product_price) VALUES ('$firstname', '$lastname', '$gmail', '$pno', '$addr', '$product_id', '$product_name', '$product_description', '$product_price')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>window.location.href = "pay.php?product_price='.$product_price.'s";</script>';
        exit();
    } else {
        echo '<script>alert("Order unsuccessful. Please try again.");</script>';
    }
}

// Close the database connection
$conn->close();
?>
</body>
<?php include_once('footer.php'); ?>

</html>

