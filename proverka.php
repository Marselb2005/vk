<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'marsel_pn_10');
$query = mysqli_query($connect, "SELECT * FROM vk WHERE email = '" . $_POST['email'] ."' AND password = '". $_POST['password'] . "'");
$result = $query->fetch_assoc();
if ($query->num_rows == 0) {
	header('Location: http://Marselny/cait/auto.php?nety=Нету такого пользователя');
} else{
	header('Location: http://Marselny/cait/my str.php?id=' . $result['id']);
}
 ?>