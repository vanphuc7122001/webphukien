<?php 
	$sql = "select orders.*, 
			user.name as user_name, 
			user.phone_number as user_phone,
			user.address as user_address 
			from orders join user
			on orders.user_id = user.id";
	$result = mysqli_query($connect,$sql);
 ?>
<div class="card">
	<div class="card-header font-20 bg-dark text-white">
		Danh sách đơn hàng
	</div>
	<div class="card-body font-16">
		<table class="table table-bordered text-center">
			<thead>
			    <tr>
					<th>#</th>
					<th>Thời gian đặt</th>
					<th>Thông tin người nhận</th>
					<th>Thông tin người đặt</th>
					<th>Trạng thái</th>
					<th>Tổng tiền</th>
					<th>Xem</th>
					<th>Sửa</th>
			    </tr>
		  	</thead>
		  	<tbody>
		  		<?php foreach ($result as $each): ?>
				    <tr>
				      <td><?php echo $each['id'] ?></td>
				      <td><?php echo $each['created_at'] ?></td>
				      <td>
				      		<?php echo $each['name_receiver'] ?> <br>
				      		<?php echo $each['phone_receiver'] ?> <br>
				      		<?php echo $each['address_receiver'] ?> <br>
				      </td>
				      <td>
				      		<?php echo $each['user_name'] ?> <br>
				      		<?php echo $each['user_phone'] ?> <br>
				      		<?php echo $each['user_address'] ?> <br>
				      </td>
				      <td>
				      	<?php switch ($each['status']) {
				      		case '1':
				      			echo 'Đã duyệt';
				      			break;
				      		case '2':
				      			echo 'Đã hủy';
				      			break;
				      		
				      		default:
				      			echo 'Mới đặt';
				      			break;
				      	} ?>
				      </td>
				      <td><?php echo number_format($each['total_price'],0,'','.').' VND' ?> </td>
				      <td>
				      	<a href="?controller=orders&action=view_detail&id=<?php echo $each['id'] ?>">
				      		Xem chi tiết
				      	</a>
				      </td>
				      <td>
				      	<a href="?controller=orders&action=update&id=<?php echo $each['id'] ?>&status=1">
				      		Duyệt
				      	</a>
				      	<a href="?controller=orders&action=update&id=<?php echo $each['id'] ?>&status=2" class="ml-3">
				      		Hủy
				      	</a>
				      </td>
				    </tr>
		  		<?php endforeach ?>

		  </tbody>
		</table>
	</div>
</div>
