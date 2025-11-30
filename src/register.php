<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "login-1";

$conn = mysqli_connect($host, $username, $password, $database);

if ($conn) {
    if(isset($_POST['first-name'])){
        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO users (`fname` , `lname` , `email` , `password`) 
                VALUES ('$firstName' , '$lastName' , '$email' ,'$password')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            session_start();
            $_SESSION['message1'] = 'ثبت شد';
            header("Location:reigster.php"); 
            exit();
        }
    }
}
?>
