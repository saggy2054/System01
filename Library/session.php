<?php
session_start();

function checkSession() {
    if (!isset($_SESSION['username'])) {
        header("Location: custlogin.php");
        exit();
    }
}
?>
