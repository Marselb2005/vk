<?php 
$connect = mysqli_connect('127.0.0.1','root','','marsel_pn_10');
$query = mysqli_query($connect, "INSERT INTO vk (email,name,password,day,month,year) VALUES ('" .$_POST['email'] . "','" . $_POST['name'] . "','" . $_POST['password'] ."','" . $_POST['day'] ."','" . $_POST['month'] ."','" . $_POST['year'] ."')" );
header('Location: http://marselny/cait/auto.php');
 ?>