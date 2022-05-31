<?php
$login_admin = $_SESSION['login_admin'];

require "connection.php";

if (isset($_POST['submit'])) {
  move_uploaded_file($_FILES['file']['tmp_name'], "/img/appartment" . $_FILES['file']['name']);


  $Pname = mysqli_real_escape_string($con, $_POST['Pname']);
  $AdminId = mysqli_real_escape_string($con, $_POST['paddress']);
  $Location = mysqli_real_escape_string($con, $_POST['Location']);
  $yearbuilt = mysqli_real_escape_string($con, $_POST['yearbuilt']);
  $Description = mysqli_real_escape_string($con, $_POST['Description']);
  $PropertyType = mysqli_real_escape_string($con, $_POST['PropertyType']);
  $PropertyFor = mysqli_real_escape_string($con, $_POST['PropertyFor']);
  $Bedrooms = mysqli_real_escape_string($con, $_POST['Bedrooms']);
  $LivingRooms = mysqli_real_escape_string($con, $_POST['LivingRooms']);
  $Bathrooms = mysqli_real_escape_string($con, $_POST['Bathrooms']);
  $Kitchens = mysqli_real_escape_string($con, $_POST['Kitchens']);
  $Areas = mysqli_real_escape_string($con, $_POST['Areas']);
  $hasPool = $_POST['hasPool'];
  $hasGarden = $_POST['hasGarden'];
  $hasCarParking = $_POST['hasCarParking'];
  $hasBalcony = $_POST['hasBalcony'];
  $hasTerrace = $_POST['hasTerrace'];
  $imageInput = $_FILES['file']['name'];
  // $checkboxAll = mysqli_real_escape_string($con,$_POST['checkboxAll']);
  $Price = mysqli_real_escape_string($con, $_POST['Price']);

  $sql3 = "INSERT INTO `property`(`Pname`
  ,`AdminId`
  ,`Location`
  ,`yearbuilt`
  ,`Description`,
    `PropertyType`,
    `PropertyFor`,
    `Bedrooms`,
    `LivingRooms`,
    `Bathrooms`,
    `Kitchens`,
     `Areas`,
     `hasPool`,
     `hasGarden`,
     `hasCarParking`,
     `hasBalcony`,
     `hasTerrace`,
     `Price`,
     `Pimage`
    ) 
    VALUES ('$Pname','$AdminId','$Location','$yearbuilt','$Description','$PropertyType','$PropertyFor','$Bedrooms'
    ,'$LivingRooms'
    ,'$Bathrooms'
    ,'$Kitchens'
    ,'$Areas',
       '$hasPool','$hasGarden','$hasBalcony',
     '$hasCarParking',
     '$hasTerrace',
    '$Price',
    '$imageInput'
    )";
  mysqli_query($con, $sql3);
}
?>
