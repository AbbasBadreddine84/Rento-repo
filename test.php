<?php

require_once 'connection.php';

session_start();

$login_admin=$_SESSION['login_admin'];


$query="SELECT * FROM admin WHERE username='$login_admin'";
$result = $con->query($query);
while($row = $result->fetch_assoc()) {


    $FirstName = $row["FirstName"];
    $LastName = $row["LastName"];
    $username = $row["username"];
    $email = $row["email"];
    $password = $row["password"];
    $region = $row["region"];
    $phonenumber =$row["phonenumber"];
    $image = $row["image"];



}
