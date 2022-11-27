
<?php 
	$sql = "select * from news_category";
	$result = mysqli_query($connect,$sql);
 ?>
<div class="card rounded">
	<div class="card-header font-20 bg-dark text-white">
		Danh mục bài viết
	</div>
	<div class="card-body font-16">
		<a href="?controller=newsCategory&action=create" class="btn__common text-decoration-none btn-primary">Thêm</a>
		<table class="table table-bordered mt-3">
			<thead class="thead-dark">
				<tr>
				  <th>#</th>
			      <th>Tên</th>
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
						<a href="?controller=newsCategory&action=edit&id=<?php echo $each['id'] ?>" class="btn__common btn-primary text-decoration-none">Sửa</a>
					</td>
					<td>
						<a href="../modules/newsCategory/process.php?id=<?php echo $each['id']?>" class="btn__common btn-primary text-decoration-none">Xóa</a>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>