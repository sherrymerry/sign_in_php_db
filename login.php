<!-- 
// include('connection.php');

// echo"test";
// $email = $_POST['email'];
// $password = $_POST['password'];

// $query = "SELECT * FROM `user` WHERE `email`= '$email' limit 1";

// $row = mysqli_query($conn, $query);

// $result = mysqli_fetch_assoc($row);

// $hash_pass = $result['password'];

// if ($result['email']===$email && password_verify($password, $hash_pass))
// {
    
//     header("location:thankyou.php");

// } else{
//     header("location:login.php");

// }



<?php
include('connection.php');

echo "test"; // This is for debugging purposes, to see if the script reaches this point

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `user` WHERE `email`= '$email' LIMIT 1";
    $row = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($row);

    if ($result && password_verify($password, $result['password'])) {
        header("Location: user_login.php");
        exit(); // Ensure script execution stops after redirection
    } else {
        header("Location: index.php"); // Redirect to the login page
        exit(); // Ensure script execution stops after redirection
    }
}
?>






