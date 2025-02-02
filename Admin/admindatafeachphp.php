<?php
include("dbconn.php");
// Fetch data from the database
$sql = "SELECT * FROM  product";
$result = $cann->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
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
        .shdw {
          box-shadow: 0 0 10px grey;
        }
    </style>
</head>
   <?php include("navbar.php"); ?>

<body>
<header class="jumbotron shdw">
    <div class="container ">
        <h1>Welcome to the Admin Panel</h1>
        <p>This is the dashboard for managing the website.</p>
    </div>
</header>
<center><h1>Product Details</h1></center><br>
<section class="intro">
    <div class="">
        <div class="mask d-flex align-items-center h-100">
            <div class="container shdw">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card mask-custom">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless text-white mb-0">
                                        <thead>
                                        <tr>
                  <th scope="col" style="color: black; font-size: 18px;"><u>ID</u></th>
                <th scope="col"style="color: black; font-size: 18px;"><u>Name</u></th>
                     <th scope="col"style="color: black; font-size: 18px;"><u>Type</u></th>
               <th scope="col"style="color: black; font-size: 18px;"><u>Description</u></th>
         <th scope="col"style="color: black; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Video</u></th>
          <th scope="col"style="color: black; font-size: 18px;"><u>Price</u></th>
          <th scope="col"style="color: black; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Action</u></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if ($result->num_rows > 0) {
                                            while ($product = $result->fetch_assoc()) { ?>
                                                <tr>
                                  <td style="color: black;"><?php echo $product["ID"]; ?></td>
                                  <td style="color: black;"><?php echo $product["name"]; ?></td>
                                 <td style="color: black;"><?php echo $product["type"]; ?></td>
                                <td style="color: black;"><?php echo $product["description"]; ?></td>
                                  <td>
                                  <video autoplay muted width="100">
                            <source src="<?php echo $product['video']; ?>" type="video/mp4">
                                     </video>
                            </td>
                               <td style="color: black;"><?php echo $product["price"]; ?></td>
                                    <td>
                     <a href="update.php?id=<?php echo $product['ID']; ?>" class="btn btn-primary">Update</a>
                      <a href="delete.php" class="btn btn-danger">Delete</a>
                                  </td>
                                                </tr>
                                            <?php }
                                        } else {
                                            echo "<tr><td colspan='7'>No data found</td></tr>";
                                        }
                                        // Close the database connection
                                        $cann->close();
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
