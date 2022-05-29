<?php
require 'connection.php';
session_start();
$error = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "some field still missing";
    } else {
        $FirstName = mysqli_real_escape_string($con, $_POST['FirstName']);
        $LastName = mysqli_real_escape_string($con, $_POST['LastName']);
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $password = stripslashes($password);
        $region = mysqli_real_escape_string($con, $_POST['region']);
        $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
        $role = mysqli_real_escape_string($con, $_POST['role']);
        
        if ($role == "1") {
            $query = "INSERT INTO `admin`(`FirstName`,`LastName`,`username`,`email`,`password`,`region`,`phonenumber`,`role`) VALUES ('$FirstName','$LastName','$username','$email', '$password','$region','$phonenumber', '$role')";
            mysqli_query($con,$query);
            $error = "the user $username is succesfuly Registertd";
        } else if ($role == "2") {
            $query2 = "INSERT INTO `customer`(`FirstName`,`LastName`,`username`,`email`, `password`,`region`,`phonenumber`,`role`) VALUES ('$FirstName','$LastName','$username','$email', '$password','$region','$phonenumber', '$role')";
            mysqli_query($con, $query2);
            $error = "the user $username is succesfuly Registertd";
        } else

            $error = "the user $username already exits";
        mysqli_close($con);
    }
}
