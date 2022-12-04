<?php 	
//unset($_SESSION['cart']);
$id = $_GET['id'];

if(empty($_SESSION['cart'][$id])){
	$sql = "select * from product
	where id = '$id'";
	$result = mysqli_query($connect, $sql);
	$each = mysqli_fetch_array($result);
	$_SESSION['cart'][$id]['name'] = $each['name'];
	$_SESSION['cart'][$id]['image'] = $each['image'];
	$_SESSION['cart'][$id]['price'] = $each['price'];
	$_SESSION['cart'][$id]['quantity'] = 1;
} else {
	$_SESSION['cart'][$id]['quantity']++;
}

$_SESSION['status'] = 'Bạn đã đặt hàng thành công đơn hàng sẻ giao đến bạn trong vòng 3 đến 7 ngày';

header('location:../../../index.php');

// echo json_encode($_SESSION['cart']);

