<?php
    $username = "root"; //mysql username
    $password = ""; //mysql password
    $hostname = "localhost"; //hostname
    $databasename = 'ecommercedb'; //databasename
     
    $conn = mysqli_connect($hostname, $username, $password, $databasename)or die('Could not connect to the database');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    function alert($msg) {
        echo("<script>alert('" . $msg .  "')</script>");
    }

    function consoleLog($msg) {
        echo("<script>console.log('" . $msg .  "')</script>");
    }
?>