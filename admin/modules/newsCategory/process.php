<?php session_start();

include_once '../../config/connect.php';

$name = $_POST['name'] ?? '';

if(isset($_POST['store'])){
	$sql = "insert into news_category (name) VALUES ('$name')";
	mysqli_query($connect,$sql);
	$_SESSION['status'] = 'Thành công';
	$_SESSION['text'] = 'Bạn đã thêm thành công một danh mục bài viết mới';
	$_SESSION['status_code'] = 'success';
	header('location:../../root/index.php?controller=newsCategory');
}elseif (isset($_POST['update'])) {
	$id = $_POST['id_update'];
	$sql = "update news_category set name = '$name' where id = '$id'";
	mysqli_query($connect,$sql);
	$_SESSION['status'] = 'Thành công';
	$_SESSION['text'] = 'Bạn đã sửa danh mục bài viết thành công';
	$_SESSION['status_code'] = 'success';
	header('location:../../root/index.php?controller=newsCategory');
}else{
	$id = $_GET['id'];
	$sql = "delete from news_category where id = '$id'";
	mysqli_query($connect,$sql);
	$_SESSION['status'] = 'Thành công';
	$_SESSION['text'] = 'Bạn đã xóa thành công danh mục bài viết';
	$_SESSION['status_code'] = 'success';
	header('location:../../root/index.php?controller=newsCategory');
}