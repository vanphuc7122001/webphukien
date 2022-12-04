<?php 

	$limit = 3;
	$current_page = $_GET['page'] ?? 1;
	if($current_page == 1 || $current_page == ''){
		$start = 0;
	}
	else{
		$start = ($current_page*$limit)-$limit;
	}
	$sql = "select orders.*, 
			user.name as user_name, 
			user.phone_number as user_phone,
			user.address as user_address 
			from orders join user
			on orders.user_id = user.id 
			limit $start,$limit";
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


<!-- Phân trang -->


<?php 
	$sql_page = "select * from orders";
	$rs_page = mysqli_query($connect,$sql_page);
	$row_count = mysqli_num_rows($rs_page);
	$page = ceil($row_count/3);	// tổng số trang
 ?>

<ul class="pagination justify-content-end mt-5">
	<?php if($current_page > 1) { ?>
		<li class="page-item">
			<a class="page-link font-16" href="?controller=orders&page=<?php echo (int)$current_page-1  ?>">Previous</a>
		</li>
	<?php } for ($i=1; $i <= $page ; $i++) { ?>
		<li class="page-item">
			<a <?php if ($i == $current_page) { echo 'style="opacity: 0.3;"';} else {echo '';}?>  class="page-link font-16"  href="?controller=orders&page=<?php echo $i ?>"><?php echo $i ?></a>
		</li>
	<?php } if($current_page < $page) {?>
		<li class="page-item">
			<a class="page-link font-16" href="?controller=orders&page=<?php echo (int)$current_page+1  ?>">Next</a>
		</li>
	<?php } ?>
</ul>
