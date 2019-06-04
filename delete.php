<?php
$connect = mysqli_connect('127.0.0.1','root','', 'marsel_pn_10');
$query = mysqli_query($connect, "DELETE FROM post_vk WHERE id= '" . $_POST['text'] .  "'");
header('Location: http://Marselny/cait/my str.php?id=' . $_POST['id']);
?>
