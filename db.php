<?php
$conn = new mysqli("localhost","home","")
  or die("???");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); }
echo "<p>Connected successfully<p>";
?>