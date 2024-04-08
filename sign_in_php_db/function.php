<?php
include('connection.php');
// Get form data
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$name = $_POST['name'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert data into branch table
$sql_query = "INSERT INTO `user` (`email`,`password`,`number`,`name`) VALUES ('$email','$hashed_password','$number','$name')";
$conn->query($sql_query);


if ($conn->query($sql_query) === TRUE) {
    header("Location: thankyou.php");
exit;
} else {
    echo "Error: " . $sql_query . "<br>" . $conn->error;
}