<?php 
	$order_id = $_GET['id'];
	$sql = "select product.* , order_product.quantity quantity_product_order
			from product join order_product 
			on  product.id = order_product.product_id
			where order_id = '$order_id'";
	// die($sql);
	$result = mysqli_query($connect,$sql);
	$sum = 0;
 ?>


<div class="card">
	<div class="card-header font-20 bg-dark text-white">
		Danh sách đơn hàng
	</div>
	<div class="card-body font-16">
		<table class="table table-bordered text-center">
				<thead>
					    <tr>
							<th>Ảnh</th>
							<th>Tên sản phẩm</th>
							<th>Giá</th>
							<th>Số lượng</th>
							<th>Tổng tiền</th>
					    </tr>
			  	</thead>
			  	<tbody>
			  		<?php foreach ($result as $each): ?>	
				  		<tr>
				  			<td>
				  				<img src="../modules/product/uploads/<?php echo $each['image'] ?>" alt="" width="150px">
				  			</td>
				  			<td><?php echo $each['name'] ?></td>
				  			<td><?php echo number_format($each['price'],0,'','.').' VND' ?></td>
				  			<td><?php echo $each['quantity_product_order'] ?></td>
				  			<td><?php $rs = ($each['quantity_product_order'] * $each['price']) ;
				  				$sum+=$rs;
				  				echo number_format($rs,0,'','.').' VND';
				  			?>
				  			</td>
				  		</tr>
			  		<?php endforeach ?>
			  	</tbody>
		</table>
	</div>
	 <div class="card-footer text-danger">
    	<h4>Tổng tiền cho đơn hàng này là : <?php echo number_format($sum,0,'','.'). ' VND' ?></h4>
  	</div>
</div>