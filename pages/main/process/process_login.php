<?php session_start();
require_once '../../../admin/config/connect.php';

$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');


$password = md5($password);


$sql = "select * from user where email = '$email' and password = '$password'";
$result = mysqli_query($connect,$sql);
$count_row = mysqli_num_rows($result);


if ($count_row == 1) {
	$_SESSION['status'] = 'Đăng nhập thành công';
	$each = mysqli_fetch_assoc($result);
	$_SESSION['id'] = $each['id'];
	$_SESSION['name'] = $each['name'];
	header('location:../../../index.php');
}else{
	$_SESSION['status'] = 'Tài khoản hoặc mật khẩu bị sai';
	header('location:../../../index.php?action=login');
}