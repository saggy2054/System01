<?php
include_once('dbconn.php');

// Check if the database connection is successful
if ($cann->connect_error) {
    die("Connection failed: " . $cann->connect_error);
}

$query = "SELECT * FROM product";
$result = $cann->query($query);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . $cann->error);
}

while ($row = $result->fetch_assoc()) {
    $ID = $row['ID'];
    $name = $row['name'];
    $type = $row['type'];
    $description = $row['description'];
    $video = $row['video'];

    echo "<div class='card'>";
    echo "<video class='card-vid-top' alt='$name' height='300px' width='300px'>";
    echo "<source src='C:/xampp/htdocs/jewelry$video' type='video/mp4'>";
    echo "</video>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>$name</h5>";
    echo "<p class='card-text'>$type</p>";
    echo "<p class='card-text'>$description</p>";
    echo "</div>";
    echo "</div>";
}

// Close the database connection
$cann->close();
?>
