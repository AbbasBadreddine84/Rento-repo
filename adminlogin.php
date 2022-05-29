<?php
require 'connection.php';
session_start();
$error = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "email or Password is empty";
    } else {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $email = stripslashes($email);
        $password = stripslashes($password);
        require 'connection.php';
        $sql =  mysqli_query($con, "SELECT * FROM `admin` WHERE email = '$email' AND password = '$password'");
        if (mysqli_num_rows($sql)>0) {
            $row=mysqli_fetch_assoc($sql);

            if ($row['role'] == 1) {
                $_SESSION['login_admin'] = $row['username'];
                header("location: adminDashboard.php");
            } else if ($row['role'] !== 1) {
                header("location:Login.php");
            } else
                print_r($row);
        } else {
            $error = "email or Password is invalid";
        }
        mysqli_close($con);
    }
}
