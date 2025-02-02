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

        .txt {
         color: #121212;

text-shadow: 2px 7px 5px rgba(0,0,0,0.3), 
    0px -4px 10px rgba(255,255,255,0.3);
        }

  </style>
</head>
<?php include_once('navbar.php'); ?><br>
<body style="background-color: ghostwhite;font-family:Times new romans;">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<div class="container mt-4">
  <center>
    <h2 style="font-family: Times new romans; background-color: ghostwhite;" class="txt"><i>Feedback Details</i></h2><br>
  </center>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card-body shdwss" style="background-color: ghostwhite;">
          <div class="table-responsive">
            <button type="button" class="btn btn-danger delete-all-btn" onclick="confirmDeleteAll()">Remove All</button>
            <table class="table table-light table-borderless mb-0" style="background-color: ghostwhite;">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Message</th>
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

                // Retrieve user details from the database
                $query = "SELECT * FROM contact";
                $result = mysqli_query($conn, $query);

                // Check if there are any records
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['gmail'] . "</td>";
                    echo "<td>" . $row['message'] . "</td>";
                    // Add delete button
                    echo "<td><form method='post'><input type='hidden' name='username' value='" . $row['ID'] . "'><button type='submit' name='Remove' class='btn btn-danger'>Delete</button></form></td>";
                    echo "</tr>";
                  }
                } else {
                  echo "<tr><td colspan='5'>No user details found</td></tr>";
                }

                // Close the database connection
                mysqli_close($conn);

                // Delete user record if delete button is clicked
                if (isset($_POST['Remove'])) {
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
                  $username = $_POST['username'];
                  $delete_query = "DELETE FROM contactme WHERE ID = $username";
                  $delete_result = mysqli_query($conn, $delete_query);
                  if ($delete_result) {
                    echo "<script>alert('User record deleted successfully');</script>";
                    echo "<script>window.location.href = 'contastus details.php';</script>";
                  } else {
                    echo "<script>alert('Failed to delete user record');</script>";
                  }
                  mysqli_close($conn);
                }

                if (isset($_POST['delete_all'])) {
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
                  $delete_all_query = "DELETE FROM contactme";
                  $delete_all_result = mysqli_query($conn, $delete_all_query);
                  if ($delete_all_result) {
                    echo "<script>alert('All user records deleted successfully');</script>";
                    echo "<script>window.location.href = 'contactus details.php';</script>";
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
