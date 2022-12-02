<?php session_start();

include_once '../../config/connect.php';

$name = $_POST['name'] ?? '';
$price = $_POST['price'] ?? '';
$quantity = $_POST['quantity'] ?? '';
$content = $_POST['content'] ?? '';
$description = $_POST['description'] ?? '';
$status = $_POST['status'] ?? '';

// id danh mục sản phẩm
$id_category = $_POST['category'] ?? '';


// Xử lý hình ảnh
$image = $_FILES['image']['name'] ?? '';
$image_tmp = $_FILES['image']['tmp_name'] ?? '';
$image_time = time().''.$image;



if(isset($_POST['store'])){
	$sql = "insert into product(name,price,quantity,image,description,content,id_category,status) values 
			('$name','$price','$quantity','$image_time','$description','$content','$id_category','$status')";
	mysqli_query($connect,$sql);
	move_uploaded_file($image_tmp,'./uploads/'.$image_time);
	$_SESSION['status'] = 'Thành công';
	$_SESSION['text'] = 'Bạn đã thêm sản phẩm thành công ';
	$_SESSION['status_code'] = 'success';
	header('location:../../root/index.php?controller=product');
}elseif (isset($_POST['update'])) {
	$id = $_POST['id'];
	if(!empty($image)){
		move_uploaded_file($image_tmp,'./uploads/'.$image_time);
		// Xóa  hình ảnh củ
		$sql_unset = "select * from product where id = '$id'";
		$result = mysqli_query($connect,$sql_unset);
		while ($row = mysqli_fetch_array($result)) {
			unlink('./uploads/'.$row['image']);
		}
		$sql = "update product 
				set 
				name = '$name',
				price = '$price',
				quantity = '$quantity',
				image = '$image_time',
				description = '$description',
				content = '$content',
				id_category = '$id_category',
				status = '$status'
				where id = '$id'";
	}else{
		$sql = "update product 
				set 
				name = '$name',
				price = '$price',
				quantity = '$quantity',
				description = '$description',
				content = '$content',
				id_category = '$id_category',
				status = '$status'
				where id = '$id'";
		mysqli_query($connect,$sql);
	}
	mysqli_query($connect,$sql);
	$_SESSION['status'] = 'Thành công';
	$_SESSION['text'] = 'Bạn đã sửa sản phẩm thành công';
	$_SESSION['status_code'] = 'success';
	header('location:../../root/index.php?controller=product');
}else{
	$id = $_GET['id'];
	$sql_unset = "select * from product where id = '$id'";
	$result = mysqli_query($connect,$sql_unset);
		while ($row = mysqli_fetch_array($result)) {
			unlink('./uploads/'.$row['image']);
		}
	$sql = "delete from product where id = '$id'";
	mysqli_query($connect,$sql);
	$_SESSION['status'] = 'Thành công';
	$_SESSION['text'] = 'Bạn đã xóa sản phẩm thành công';
	$_SESSION['status_code'] = 'success';
	header('location:../../root/index.php?controller=product');
}