<?php 

$name_receiver = trim($_POST['name_receiver']) ?? '';
$phone_receiver = trim($_POST['phone_receiver']) ?? '';
$address_receiver = trim($_POST['address_receiver']) ?? '';


$cart = $_SESSION['cart'];

$total_price = 0;
$status = 0; // mới đặt

foreach ($cart as $id => $each) {
	$total_price+=$each['quantity']*$each['price'];
}

$user_id = $_SESSION['id'];


$sql = "insert into orders (user_id,name_receiver,phone_receiver,address_receiver,status,total_price) values
		('$user_id','$name_receiver','$phone_receiver','$address_receiver','$status','$total_price')";
mysqli_query($connect,$sql);

$sql = "select max(id) as order_id from orders where user_id = '$user_id'";
$result = mysqli_query($connect,$sql);
$order_id = mysqli_fetch_assoc($result)['order_id'];


foreach ($cart as $product_id => $row) {
		$quantity = $row['quantity'];
		$sql = "insert into order_product(order_id,product_id,quantity) values ('$order_id','$product_id','$quantity')";
		mysqli_query($connect,$sql);
}

$_SESSION['status'] = 'Bạn đã đặt hàng thành công đơn hàng sẻ được giao đến bạn sớm';
unset($_SESSION['cart']);
header('location:index.php');
