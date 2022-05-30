<?php

$login_admin = $_SESSION['login_admin'];
require "connection.php";

if (isset($_POST['submit'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], "img/" . $_FILES['file']['name']);

 $AID = $_POST['AID']; 
 $username = $_POST['username']; 
  $email = $_POST['email']; 
   $password = $_POST['password']; 
    $FirstName = $_POST['FirstName']; 
     $LastName = $_POST['LastName'];
      $DateOfBirth = $_POST['DateOfBirth']; 
       $PhoneNumber = $_POST['PhoneNumber']; 
        $address = $_POST['address'];
        $region = $_POST['region'];
         $imageInput=$_FILES['file']['name'];

    $query = "update admin set username='$username',
    email='$email',
    password='$password',
    FirstName='$FirstName',
    LastName='$LastName',
    DateOfBirth='$DateOfBirth',
    PhoneNumber='$PhoneNumber',
    address='$address',
    region='$region',
    image='$imageInput'
    where username='$login_admin'";
    $result = mysqli_query($con, $query);






}

?>