<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="https://clipart-library.com/images/rcnrbpAXi.jpg" style="height: 45px; width: 45px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="onwerpage.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="save_product.php">Add Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminupdatafaechehtml.php">Update Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="userdetails1.php">Farmer Details</a>
                </li>
            </ul>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <div class="container"><br><br>
        <?php include 'admindatafeachphp.php'; ?> <!-- Include the PHP script to display the fetched data -->
    </div>
</body>
</html>
