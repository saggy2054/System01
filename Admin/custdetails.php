<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    html,
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

    thead th,
    tbody th {
      color: black;
    }

    tbody td {
      font-weight: 500;
      color: black;
    }

    .card {
      border-radius: .5rem;
    }

    .action-column {
      width: 120px;
    }

    .delete-all-btn {
      margin-bottom: 10px;
    }

    .shdwss {
      box-shadow: 0 0 15px lightblue;
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

<?php include_once('navbar.php'); ?><br>

<div class="container mt-4">
  <center>
    <h2 style="font-family: Times new romans; background-color: ghostwhite;" class="txt"><i>Registration&nbsp; Details</i></h2><br>
  </center>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card-body shdwss" style="background-color: ghostwhite;">
          <!-- Customer Search Form -->
          <form method="GET" action="">
            <div class="form-row align-items-center mb-3">
              <div class="col-auto">
                <select style="background-color:ghostwhite;" class="form-control shdww" name="search_by">
                  <option value="username">Username</option>
                  <option value="mobile">Mobile Number</option>
                  <option value="email">Email</option>
                </select>
              </div>
              <div class="col-auto">
                <input style="background-color:ghostwhite;" type="text" name="search_value" class="form-control shdww" placeholder="Search term">
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-success">Search</button>
              </div>
            </div>
          </form>

          <div class="table-responsive">
            <button type="button" class="btn btn-danger delete-all-btn" onclick="confirmDeleteAll()">Remove All</button>
            <table class="table table-light table-borderless mb-0" style="background-color: ghostwhite;">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Mobile No</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th class="action-column">Action</th>
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

                   // Handle customer search query
                   if (isset($_GET['search_value']) && isset($_GET['search_by'])) {
                     $search_value = $_GET['search_value'];
                     $search_by = $_GET['search_by'];

                     // Fetch data from the database based on search criteria
                     $query = "SELECT * FROM cust_regis WHERE $search_by LIKE '%$search_value%'";
                   } else {
                     // Retrieve user details from the database
                     $query = "SELECT * FROM cust_regis";
                   }

                   $result = mysqli_query($conn, $query);

                   // Check if there are any records
                   if (mysqli_num_rows($result) > 0) {
                     while ($row = mysqli_fetch_assoc($result)) {
                       echo "<tr>";
                       echo "<td>" . $row['username'] . "</td>";
                       echo "<td>" . $row['mobile'] . "</td>";
                       echo "<td>" . $row['email'] . "</td>";
                       echo "<td>" . $row['address'] . "</td>";
                       // Add delete button
                       echo "<td><form method='post'><input type='hidden' name='username' value='" . $row['id'] . "'><button type='submit' name='Remove' class='btn btn-danger'>Delete</button></form></td>";
                       echo "</tr>";
                     }
                   } else {
                     echo "<tr><td colspan='5'>No user details found</td></tr>";
                   }

                   // Close the database connection
                   mysqli_close($conn);

                   // Delete user record if delete button is clicked
                   if (isset($_POST['Remove'])) {
                     $conn = new mysqli($servername, $username, $password, $dbname);

                     if ($conn->connect_error) {
                       die("Connection failed: " . $conn->connect_error);
                     }

                     $username = $_POST['username'];
                     $delete_query = "DELETE FROM cust_regis WHERE id =$username";
                     $delete_result = mysqli_query($conn, $delete_query);
                     
                     if ($delete_result) {
                       echo "<script>alert('User record deleted successfully');</script>";
                       echo "<script>window.location.href = 'custdetails.php';</script>";
                     } else {
                       echo "<script>alert('Failed to delete user record');</script>";
                     }
                     
                     mysqli_close($conn);
                   }

                   if (isset($_POST['delete_all'])) {
                     $conn = new mysqli($servername, $username, $password, $dbname);

                     if ($conn->connect_error) {
                       die("Connection failed: " . $conn->connect_error);
                     }

                     $delete_all_query = "DELETE FROM cust_regis";
                     $delete_all_result = mysqli_query($conn, $delete_all_query);
                     
                     if ($delete_all_result) {
                       echo "<script>alert('All user records deleted successfully');</script>";
                       echo "<script>window.location.href = 'custdetails.php';</script>";
                     } else {
                       echo "<script>alert('Failed to delete all user records');</script>";
                     }
                     
                     mysqli_close($conn);
                   }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function confirmDeleteAll() {
    if (confirm("Are you sure you want to delete all records?")) {
      document.getElementById('deleteAllForm').submit();
    }
  }
</script>

<form id="deleteAllForm" method="post" style="display: none;">
  <input type="hidden" name="delete_all" value="1">
</form>

</body>
</html>
