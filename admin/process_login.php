<?php session_start();

	require_once './config/connect.php';
	$username = trim($_POST['username']) ?? '';
	$password = trim($_POST['password']) ?? '';

	if(isset($_POST['login'])){
		$sql = "select * from admin where username='$username' and password = '$password'";
		$rs = mysqli_query($connect,$sql);
		$count_row = mysqli_num_rows($rs);
		if($count_row == 1){
			$each = mysqli_fetch_assoc($rs);
			$_SESSION['id_admin'] = $each['id'];
			$_SESSION['username'] = $each['username'];
			$_SESSION['level'] = $each['level'];
			$_SESSION['status'] = 'Đăng Nhập Thành Công';
			header('location:./root/index.php');
		}else{
			header('location:index.php');
			$_SESSION['status'] = 'Đăng Nhập Thất Bại';

		}
	}
 ?>