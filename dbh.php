<?php

$servername = "172.18.0.2";
$dBUsername = "root";
$dBPassword = "mypass123";
$dBName = "MyDatabase";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
