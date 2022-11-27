<?php 

include_once '../../config/connect.php';

$name = $_POST['name'] ?? '';

if(isset($_POST['store'])){
	$sql = "insert into news_category (name) VALUES ('$name')";
	mysqli_query($connect,$sql);
	header('location:../../root/index.php?controller=newsCategory');
}elseif (isset($_POST['update'])) {
	$id = $_POST['id_update'];
	$sql = "update news_category set name = '$name' where id = '$id'";
	mysqli_query($connect,$sql);
	header('location:../../root/index.php?controller=newsCategory');
}else{
	$id = $_GET['id'];
	$sql = "delete from news_category where id = '$id'";
	mysqli_query($connect,$sql);
	header('location:../../root/index.php?controller=newsCategory');
}