<h5 class="text-danger">Giỏ Hàng</h5>

<?php 
	if(empty($_SESSION['cart'])) {
 ?>
 <div class="text-center">
 	<a href="index.php" class="text-center">Hiện tại giỏ hàng chống. Bạn có muốn mua hàng không ?</a>
 </div>
<?php } else { 
	$cart = $_SESSION['cart'];
	$sum = 0;
?>

<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>Tên sản phẩm</th>
      <th>Hình ảnh</th>
      <th>Giá</th>
      <th>Số lượng</th>
      <th>Thành tiền</th>
      <th>Xóa sản phẩm</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($cart as $id => $each): ?>
    <tr>
    	<td><?php echo $each['name'] ?></td>
    	<td>
    		<img src="./admin/modules/product/uploads/<?php echo $each['image'] ?>" alt="Ảnh sản phẩm" width="150px">
    	</td>
    	<td><?php echo number_format($each['price'],0,'','.') . ' VND' ?></td>
    	<td class="text-center">
	    		<a class="quantity__cart--update" href="?action=update_quantity_cart&id=<?php echo $id ?>&type=decre">-</a> 
	    			<?php echo $each['quantity'] ?>
	    		<a class="quantity__cart--update" href="?action=update_quantity_cart&id=<?php echo $id ?>&type=incre">+</a>
    	</td>
    	<td>
    		<?php $result = $each['quantity'] * $each['price'] ;
    			$sum += $result;
    			echo number_format($result,0,'','.').' VND';
    		?>
    	</td>
    	<td class="text-center">
    		<a  class="btn btn-primary" href="?action=delete_from_cart&id=<?php echo $id ?>">X</a>
    	</td>
    </tr>
  	<?php endforeach ?>
  </tbody>
</table>
<h5 class="text-right text-danger">Tổng tiền sản phẩm <?php echo number_format($sum,0,'','.') . ' VND' ?></h5>

<?php 
	$id = $_SESSION['id'];
	$sql = "select * from user where id = '$id'";
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_assoc($result);
 ?>
 <form action="?action=order" method="post">
 	<div class="form-group">
    	<label for="name_receiver">Tên Người Nhận</label>
    	<input type="text" class="form-control" id="name_receiver" placeholder="Nhập tên người nhận" name="name_receiver" value="<?php echo $row['name'] ?>">
  	</div>
  	<div class="form-group">
    	<label for="phone_receiver">Số Điện Thoại Người Nhận</label>
    	<input type="text" class="form-control" id="phone_receiver" placeholder="Nhập số điện thoại người nhận" name="phone_receiver" value="<?php echo $row['phone_number'] ?>">
  	</div>
  	<div class="form-group">
    	<label for="address_receiver">Địa Chỉ Người Nhận</label>
    	<input type="text" class="form-control" id="address_receiver" placeholder="Nhập địa chỉ người nhận" name="address_receiver" value="<?php echo $row['address'] ?>">
  	</div>
  	<button class="btn btn-primary w-100">Đặt Hàng</button>
 </form>

 <?php } ?>