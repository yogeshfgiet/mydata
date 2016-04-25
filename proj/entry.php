<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = $_POST['date'];
$date = date('Y-m-d', strtotime($date));
//echo $name." ".$email." ".$message." ".$date;        


$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "users";

// Create connection
$conn = mysqli_connect("localhost","etech_yuvi","xH840LZ3srQ7","etech_yuvraj");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (name, email, message, date)
VALUES ('$name', '$email', '$message', '$date')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>