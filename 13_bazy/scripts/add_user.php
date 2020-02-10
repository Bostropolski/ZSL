<?php
session_start();
if (!empty($_POST['name'])&& !empty($_POST['surname'])&& !empty($_POST['birthday'])){
echo "test";
$name=$_POST['name'];
$surname=$_POST['surname'];
$birthday=$_POST['birthday'];

require_once('../connect.php');
$sql = "INSERT INTO `user`(`imie`, `nazwisko`, `data_ur`) VALUES ('$name','$surname','$birthday')";

if ( mysqli_query($connect,$sql)){
    $_SESSION['oldnum'] = $_SESSION['num'];
};

}else{
  header('location:../');
}
 ?>
