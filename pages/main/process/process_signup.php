<?php session_start();
require_once '../../../admin/config/connect.php';


$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');
$phone_number = trim($_POST['phone_number'] ?? '');
$address = trim($_POST['address'] ?? '');

$sql = "select * from user where email = '$email'";
$result = mysqli_query($connect,$sql);
$count_row = mysqli_num_rows($result);

if($count_row == 1){
	$_SESSION['status'] = "Email đã tồn tại";
	header('location:../../../index.php?action=register');
	exit();
}else{
	$pass = md5($password);
	$sql = "insert into user(name,email,password,phone_number,address) values ('$name','$email','$pass','$phone_number','$address')";
	mysqli_query($connect,$sql);
	$_SESSION['status'] = "Đăng ký thành công";
	header('location:../../../index.php?action=login');

}

