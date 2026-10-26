<?php
$conn = mysqli_connect("localhost", "root", "", "sampledb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>