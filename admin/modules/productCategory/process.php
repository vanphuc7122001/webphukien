<?php session_start();

include_once '../../config/connect.php';

$name = $_POST['name'] ?? '';

if(isset($_POST['store'])){
	$sql = "insert into product_category (name) VALUES ('$name')";
	mysqli_query($connect,$sql);
	$_SESSION['status'] = 'Thành công';
	$_SESSION['text'] = 'Bạn đã thêm thành công một danh mục sản phẩm mới';
	$_SESSION['status_code'] = 'success';
	header('location:../../root/index.php?controller=productCategory');
}elseif (isset($_POST['update'])) {
	$id = $_POST['id_update'];
	$sql = "update product_category set name = '$name' where id = '$id'";
	mysqli_query($connect,$sql);
	$_SESSION['status'] = 'Thành công';
	$_SESSION['text'] = 'Bạn đã sửa danh mục sản phẩm thành công';
	$_SESSION['status_code'] = 'success';
	header('location:../../root/index.php?controller=productCategory');
}else{
	$id = $_GET['id'];
	$sql = "delete from product_category where id = '$id'";
	mysqli_query($connect,$sql);
	$_SESSION['status'] = 'Thành công';
	$_SESSION['text'] = 'Bạn đã xóa thành công danh mục sản phẩm';
	$_SESSION['status_code'] = 'success';
	header('location:../../root/index.php?controller=productCategory');
}