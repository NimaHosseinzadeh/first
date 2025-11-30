<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "login-1";

$conn = mysqli_connect($host, $username, $password, $database);

if($conn){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    
    $result = mysqli_query($conn  , $query);

    if(mysqli_num_rows($result) > 0){
        header("Location:admin.php"); 
    }
}

?>