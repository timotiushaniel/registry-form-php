<?php

$servername = "172.18.0.3:3306";
$dBUsername = "root";
$dBPassword = "mypass123";
$dBName = "MyDatabase";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    echo "Failed to connect";
    die("Connection failed: ".mysqli_connect_error());
} else{
    echo "Connected";
}
