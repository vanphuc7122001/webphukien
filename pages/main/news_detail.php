<?php 
	$id = $_GET['id'];
	$sql = "select * from news where id = '$id'";
	$result = mysqli_query($connect,$sql);
 ?>



 <?php foreach ($result as $each): ?>
 	
 	<h4><?php echo $each['name'] ?></h4>
 	<div class="" style="display: flex; justify-content: center;">
    	<img src="./admin/modules/news/uploads/<?php echo $each['image']?>" alt="anh" class="img-fluid" width="500px">
    </div>

    <p class="font-13" style="font-size: 13px;"><?php echo $each['description'] ?></p>
    <p><?php echo $each['content'] ?></p>





 <?php endforeach ?>