<?php session_start();

include_once '../../config/connect.php';

$name = $_POST['name'] ?? '';
$content = $_POST['content'] ?? '';
$description = $_POST['description'] ?? '';
$id_category = $_POST['category'] ?? '';
$status = $_POST['status'] ?? '';
// xử lý hình ảnhs
$image = $_FILES['image']['name'] ?? ''; 
$image_tmp = $_FILES['image']['tmp_name'] ?? '';
$image_time = time().'_'.$image;

if(isset($_POST['store'])){
	$sql = "insert into news(name,content,description,image,status,id_category) values 
	        ('$name','$content','$description','$image_time','$status','$id_category')";
	mysqli_query($connect,$sql);
	move_uploaded_file($image_tmp,'./uploads/'.$image_time);
	$_SESSION['status'] = 'Thành công';
	$_SESSION['text'] = 'Bạn đã thêm thành công một bài viết mới';
	$_SESSION['status_code'] = 'success';
	header('location:../../root/index.php?controller=news');
}elseif(isset($_POST['update'])){
	$id = $_POST['id_update'];
	if(!empty($image)){
		move_uploaded_file($image_tmp,'./uploads/'.$image_time);
		$sql_unlink = "select * from news where id = '$id'";
		$rs = mysqli_query($connect,$sql_unlink);
		while ($row = mysqli_fetch_array($rs)) {
			unlink('./uploads/'.$row['image']);
		}
		$sql = "update news
				set 
				name = '$name',
				content = '$content',
				description = '$description',
				image = '$image_time',
				status = '$status',
				id_category = '$id_category'
				where id = '$id'";
	}else{
		$sql = "update news
				set 
				name = '$name',
				content = '$content',
				description = '$description',
				status = '$status',
				id_category = '$id_category'
				where id = '$id'";
	}
	mysqli_query($connect,$sql);
	$_SESSION['status'] = 'Thành công';
	$_SESSION['text'] = 'Bạn đã sửa bài viết thành công';
	$_SESSION['status_code'] = 'success';
	header('location:../../root/index.php?controller=news');
}else{
	$id = $_GET['id'];
	$sql_unlink = "select * from news where id = '$id'";
	$rs = mysqli_query($connect,$sql_unlink);
	while($row = mysqli_fetch_array($rs)){
		unlink('./uploads/'.$row['image']);
	}
	$sql = "delete from news where id = '$id'";
	mysqli_query($connect,$sql);
	$_SESSION['status'] = 'Thành công';
	$_SESSION['text'] = 'Bạn đã xóa bài viết thành công';
	$_SESSION['status_code'] = 'success';
	header('location:../../root/index.php?controller=news');
}

