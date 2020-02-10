<?php
session_start();
if (!empty($_POST['color'])){
echo "test";
$color=$_POST['color'];

require_once('../connect.php');
$sql = "INSERT INTO `color`(`color`) VALUES ('$color')";

if ( mysqli_query($connect,$sql)){
  header('location:../');
}
}else{
  header('location:../');
}
 ?>
