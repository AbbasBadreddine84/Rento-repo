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
    $address=$row['address'];
    $DateOfBirth = $row['DateOfBirth'];
    $phonenumber =$row["phonenumber"];
    $imageInput = $row["image"];


}



// $query1 = "SELECT * FROM property WHERE AdminId='$login_admin'";
// $result2 = $con->query($query1);
// while ($row = $result2->fetch_assoc()) {

//     $Pname = $row["Pname"];
//     $AdminId = $row["AdminId"];
//     $Location = $row["Location"];
//     $yearbuilt = $row["yearbuilt"];
//     $Description = $row["Description"];
//     $PropertyType = $row["PropertyType"];
//     $PropertyFor = $row["PropertyFor"];
//     $Bedrooms = $row["Bedrooms"];
//     $LivingRooms = $row["LivingRooms"];
//     $Bathrooms = $row["Bathrooms"];
//     $Kitchens = $row["Kitchens"];
//     $Areas = $row["Areas"];
//     $hasPool = $row["hasPool"];
//     $hasGarden = $row["hasGarden"];
//     $hasCarParking = $row["hasCarParking"];
//     $hasBalcony = $row["hasBalcony"];
//     $hasTerrace = $row["hasTerrace"];
//     $imageInput = $row["imageInput"];
//     $Price = $row["Price"];
// }



