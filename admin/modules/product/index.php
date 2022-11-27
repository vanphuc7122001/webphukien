
<?php 
	$sql = "select product.*,product_category.name as name_category  
			from product join product_category 
			on product.id_category = product_category.id";
	$result = mysqli_query($connect,$sql);
 ?>
<div class="card rounded">
	<div class="card-header font-20 bg-dark text-white">
		Danh sách sản phẩm
	</div>
	<div class="card-body font-16">
		<a href="?controller=product&action=create" class="btn__common text-decoration-none btn-primary">Thêm</a>
		<table class="table table-bordered mt-3">
			<thead class="thead-dark">
				<tr>
				  <th>#</th>
			      <th>Tên</th>
			      <th>Hình ảnh</th>
			      <th>Giá</th>
			      <th>Số lượng</th>
			      <th>Tóm tắt</th>
			      <th>Tình trạng</th>
			      <th>Danh mục</th>
			      <th>Sửa</th>
			      <th>Xóa</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($result as $each): ?>	
				<tr>
					<td><?php echo $each['id'] ?></td>
					<td><?php echo $each['name'] ?></td>
					<td>
						<img src="../modules/product/uploads/<?php echo $each['image'] ?>" alt="Hinh anh" width="150px">
					</td>
					<td> <?php echo number_format($each['price']) . 'VND'?></td>
					<td><?php echo $each['quantity'] ?></td>
					<td><?php echo $each['description'] ?></td>
					<td>
						<?php if($each['status'] == 1) { 
								echo 'Kích hoạt';
							} else {
								echo 'Ẩn';
							}
						?>
					</td>
					<td><?php echo $each['name_category'] ?></td>
					<td>
						<a href="?controller=product&action=edit&id=<?php echo $each['id'] ?>" class="btn__common btn-primary text-decoration-none">Sửa</a>
					</td>
					<td>
						<a href="../modules/product/process.php?id=<?php echo $each['id']?>" class="btn__common btn-primary text-decoration-none">Xóa</a>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>