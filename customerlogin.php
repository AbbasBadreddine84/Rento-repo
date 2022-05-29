<?php
require 'connection.php';
$error = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "email or Password is empty";
    } else {
       
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $email = stripslashes($email);
        $password = stripslashes($password);
        $sql =  mysqli_query($con, "SELECT * FROM `customer` WHERE email = '$email' AND password = '$password'");
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);

            if ($row['role'] == 2) {
                $_SESSION['login_user'] = $row['FirstName'];
                header("location: Rental-page/Rental.html");
            } else if ($row['role'] !== 2) {
                header("location:Login.php");
            } else
                print_r($row);
        } else {
            $error = "email or Password is invalid";
        }
        mysqli_close($con);
    }
}
