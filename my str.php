<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>My str</title>
</head>
<body class="bg-light">
	<?php 
$connect = mysqli_connect('127.0.0.1','root','','marsel_pn_10');
	 ?>
	<div class="container-fluid bg-primary text-white">
		<h2>VK</h2>
	</div>

	<div class=" col-8 mx-auto">
				<form action="my str.php" method="POST" >
					<button class="btn btn-link">Моя страница</button>
				</form>
				<form action="news.php" method="POST" >
					<button class="btn btn-link">Новости</button>
				</form>
		<div class="container bg-white col-6">
			<?php 
 $query = mysqli_query($connect,"SELECT * FROM vk WHERE id=" . $_GET['id']);
 $result = $query->fetch_assoc();
 echo '<img src="' . $result['avatar'] . '">'; 
			 ?>
	<?php 
 echo $result['name'] . ' ';
	 ?> 
	 <hr>
<div class="birt ">	
 <p><?php echo $result['Birthday'] . ' ';?>
  <?php echo $result['day'] . ' ';?>
   <?php echo $result['month'] . ' ';?></p>
      <?php echo $result['Cit'] . ' ';?>
    <?php echo $result['City'] . ' ';?>
</div>
<hr>
		 <?php 
 $query1 = mysqli_query($connect,"SELECT * FROM post_vk");
for($i=0; $i < $query1->num_rows; $i++){
	$result1 = $query1->fetch_assoc();?>
<div class="">
	<?php echo '<img src="' . $result1['img'] .'" class="w-100">'; ?>
	<h2><?php echo $result1['text_post']; ?></h2>
<form action="delete.php" method="POST" >
	<input type="hidden" name="text" value=" <?php echo $result1['id'] ?>">
	<button class="btn btn-danger">Удалить</button>
	<input type="hidden" name="id" value=" <?php echo $result['id'] ?>" >
</form>
</div>
<?php } ?>

	 	<form method="POST" action="insert_post.php" enctype="multipart/form-data">
			<input placeholder="Текст" type="" name="header">
			<input type="file" name="img">
			<button  class="btn btn-success">ДОБАВИТЬ</button>
			<input type="hidden" name="id" value=" <?php echo $result['id'] ?>" >
		</form>
		</div>
	</div>
</body>
</html>
