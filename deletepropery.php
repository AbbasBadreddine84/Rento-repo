<?php
require 'connection.php';
if (isset($_POST['delete'])) {
   
$PropertyID=$_POST['PropertyID'];

$query4 = "DELETE FROM `property` WHERE PropertyID=".$PropertyID;
$result=mysqli_query($con,$query4);
   
}
?>
