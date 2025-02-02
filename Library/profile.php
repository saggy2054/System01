<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Poiret+One|Open+Sans);
html,
body {
  width: 100%;
  margin: 0;
  padding: 0;
  background-color: #fffff0;
}

aside {
  position: relative;
  display: block;
  height: auto;
  overflow: hidden;
  margin: auto;
  margin-top: 5vh;
  text-align: center;
  padding: 5em;
  box-shadow: -4em 0 6em -6em #000000, 4em 0 6em -6em #000000;
  -webkit-box-shadow: -4em 0 6em -6em #000000, 4em 0 6em -6em #000000;
  -moz-box-shadow: -4em 0 6em -6em #000000, 4em 0 6em -6em #000000;
  -o-box-shadow: -4em 0 6em -6em #000000, 4em 0 6em -6em #000000;
  -webkit-animation: shadow 1s linear forwards;
  -moz-animation: shadow 1s linear forwards;
  animation: shadow 1s linear forwards;
  -webkit-animation-delay: .5s;
  -moz-animation-delay: .5s;
  animation-delay: .5s;
}

@-moz-keyframes shadow {
  from {
    box-shadow: 0 0 6em -6em #000000, 0 0 6em -6em #000000;
    -webkit-box-shadow: 0 0 6em -6em #000000, 0 0 6em -6em #000000;
    -moz-box-shadow: 0 0 6em -6em #000000, 0 0 6em -6em #000000;
    -o-box-shadow: 0 0 6em -6em #000000, 0 0 6em -6em #000000;
    max-width: 0em;
  }
  to {
    box-shadow: -4em 0 6em -6em #000000, 4em 0 6em -6em #000000;
    -webkit-box-shadow: -4em 0 6em -6em #000000, 4em 0 6em -6em #000000;
    -moz-box-shadow: -4em 0 6em -6em #000000, 4em 0 6em -6em #000000;
    -o-box-shadow: -4em 0 6em -6em #000000, 4em 0 6em -6em #000000;
    max-width: 30em;
  }
}

@keyframes shadow {
  from {
    box-shadow: 0 0 6em -6em #000000, 0 0 6em -6em #000000;
    -webkit-box-shadow: 0 0 6em -6em #000000, 0 0 6em -6em #000000;
    -moz-box-shadow: 0 0 6em -6em #000000, 0 0 6em -6em #000000;
    -o-box-shadow: 0 0 6em -6em #000000, 0 0 6em -6em #000000;
    max-width: 0em;
  }
  to {
    box-shadow: -4em 0 6em -6em #000000, 4em 0 6em -6em #000000;
    -webkit-box-shadow: -4em 0 6em -6em #000000, 4em 0 6em -6em #000000;
    -moz-box-shadow: -4em 0 6em -6em #000000, 4em 0 6em -6em #000000;
    -o-box-shadow: -4em 0 6em -6em #000000, 4em 0 6em -6em #000000;
    max-width: 30em;
  }
}

@-webkit-keyframes shadow {
  from {
    box-shadow: 0 0 6em -6em #000000, 0 0 6em -6em #000000;
    -webkit-box-shadow: 0 0 6em -6em #000000, 0 0 6em -6em #000000;
    -moz-box-shadow: 0 0 6em -6em #000000, 0 0 6em -6em #000000;
    -o-box-shadow: 0 0 6em -6em #000000, 0 0 6em -6em #000000;
    max-width: 0em;
  }
  to {
    box-shadow: -4em 0 6em -6em #000000, 4em 0 6em -6em #000000;
    -webkit-box-shadow: -4em 0 6em -6em #000000, 4em 0 6em -6em #000000;
    -moz-box-shadow: -4em 0 6em -6em #000000, 4em 0 6em -6em #000000;
    -o-box-shadow: -4em 0 6em -6em #000000, 4em 0 6em -6em #000000;
    max-width: 30em;
  }
}

header img {
  width: 10em;
  opacity: 0;
  border-radius: 50%;
  box-shadow: .25em .25em .75em 0 #999;
  -webkit-box-shadow: .25em .25em .75em 0 #999;
  -moz-box-shadow: .25em .25em .75em 0 #999;
  -o-box-shadow: .25em .25em .75em 0 #999;
  -webkit-animation: circle .5s linear forwards;
  -moz-animation: circle .5s linear forwards;
  animation: circle .5s linear forwards;
  -webkit-animation-delay: 2s;
  -moz-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-transition: all .5s ease;
  -o-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -ms-transition: all .5s ease;
  -kthtml-transition: all .5s ease;
  transition: all .5s ease;
}

@-webkit-keyframes circle {
  from {
    opacity: 0;
  }
  to {
    opacity: 100;
  }
}

@-moz-keyframes circle {
  from {
    opacity: 0;
  }
  to {
    opacity: 100;
  }
}

@keyframes circle {
  from {
    opacity: 0;
  }
  to {
    opacity: 100;
  }
}

header img:hover {
  box-shadow: -.25em .25em .75em 0 #999;
  -webkit-box-shadow: 0em 0em 1em 0 #999;
  -moz-box-shadow: -.25em .25em .75em 0 #999;
  -o-box-shadow: -.25em .25em .75em 0 #999;
  -webkit-transition: all .5s ease;
  -o-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -ms-transition: all .5s ease;
  -kthtml-transition: all .5s ease;
  transition: all .5s ease;
}

header {
  font: 1.25em/1em poiret one, sans-serif;
  letter-spacing: .5em;
  text-transform: uppercase;
}

header h2 {
  font-size: .75em;
}

.profile-bio {
  font: 1.3em/1.25em open sans, sans-serif;
  font-variant: small-caps;
  letter-spacing: .025em;
  margin-top: 2em;
}

ul {
  padding: 0;
  margin: 0 auto;
}

ul li {
  list-style: none;
  display: inline-block;
  margin-top: 1em;
}

ul li svg {
  width: 2em;
  margin: 0 3.5em;
  -webkit-transition: all .15s ease;
  -o-transition: all .15s ease;
  -moz-transition: all .15s ease;
  -ms-transition: all .15s ease;
  -kthtml-transition: all .15s ease;
  transition: all .15s ease;
}

ul li svg:hover {
  width: 2.5em;
  margin: 0 3.25em;
  -webkit-transition: all .15s ease;
  -o-transition: all .15s ease;
  -moz-transition: all .15s ease;
  -ms-transition: all .15s ease;
  -kthtml-transition: all .15s ease;
  transition: all .15s ease;
}

#twitter:hover path {
  fill: #55ACEE;
}

#envato:hover path {
  fill: #82B541;
}

#codepen:hover path {
  fill: #000000;
}

header h1,
header h2,
div,
ul {
  opacity: 0;
  -webkit-animation: fade 1s linear forwards;
  -moz-animation: fade 1s linear forwards;
  animation: fade 1s linear forwards;
  -webkit-animation-delay: 2s;
  -moz-animation-delay: 2s;
  animation-delay: 2s;
}

@-webkit-keyframes fade {
  from {
    opacity: 0;
  }
  to {
    opacity: 100;
  }
}

@-moz-keyframes fade {
  from {
    opacity: 0;
  }
  to {
    opacity: 100;
  }
}

@keyframes fade {
  from {
    opacity: 0;
  }
  to {
    opacity: 100;
  }
}

</style>
<aside class="profile-card">

<br>
<a href="logout.php">
<div style="padding-left:0px ;">
<button class="update-profile-button shdwss">Log out</button>
</div></a>

<br>
<a href="index.php">
<div style="padding-right:0px ;">
<button class="update-profile-button shdwss">Go To Home</button>
</div></a>



    <header>

<!-- profile photo -->
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
// Execute SQL query
$query = "SELECT photo FROM cust_regis";
$result = $conn->query($query);

// Process the result set
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $photoURL = $row["photo"];
        if(empty($photoURL)) {
            // If photoURL is empty, use default photo URL
            $photoURL = "pf.jpeg"; // Change this to your default photo URL
        }
        echo "<img src='$photoURL' alt='Profile Photo' ><br>";
    }
} else {
    // If no records found, display default photo
    $photoURL = "default_photo.jpg"; // Change this to your default photo URL
    echo "<img src='pf.jpeg' alt='Profile Photo' ><br>";
}

// Close the connection
$conn->close();
?>







        <!-- username -->

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
 }    $query = "SELECT username FROM cust_regis";
$result = $conn->query($query);

// Process the result set
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        echo "<br><i><h2>&nbsp;".$row["username"]."</h2></i>";
    
    }
} else {
    echo "No records found.";
}

// Close the connection
$conn->close();
?>


    </header>

    <div class="profile-bio">  
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
// Execute SQL query
$query = "SELECT email, mobile, address FROM cust_regis";
$result = $conn->query($query);

// Process the result set
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {      
        echo "<u>Email :-</u>" ."<k style='color: green;'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["email"]."</k><br>";
        echo "<u>Mobile Number :-</u>&nbsp;" ."<k style='color: green;'>&nbsp;&nbsp;". $row["mobile"] . "</k><br><br>";
        echo "<u>Address </u><br>" ."<k style='color: green;'>". $row["address"]."</k>";
    }
} else {
    echo "No records found.";
}

// Close the connection
$conn->close();
?> 
        


       
    </div>


    <style>
        /* Button styles */

        
        .update-profile-button {
            display: inline-block;
            padding: 7px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            background: linear-gradient(to right, lightyellow,white);
            color: #333;
            cursor: pointer;
            transition: background 0.3s ease;
            
           
        }
        .shdwss {
            box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
    }


        .update-profile-button:hover {
            background: linear-gradient(to right, white, lightyellow);
        }
        
    </style>

<br>
  </aside>

<br><br>

