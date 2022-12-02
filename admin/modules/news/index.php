
<?php 
	$limit = 3;
	
	$current_page = $_GET['page'] ?? 1;
	if($current_page == 1 || $current_page == ''){
		$start = 0;
	}else{
		$start = ($current_page*$limit) - $limit;
	}
	$sql = "select news.*,news_category.name as name_category  
			from news join news_category 
			on news.id_category = news_category.id order by news.id limit $start,$limit";
	$result = mysqli_query($connect,$sql);
 ?>
<div class="card rounded">
	<div class="card-header font-20 bg-dark text-white">
		Danh sách bài viết
	</div>
	<div class="card-body font-16">
		<a href="?controller=news&action=create" class="btn__common text-decoration-none btn-primary">Thêm</a>
		<table class="table table-bordered mt-3">
			<thead class="thead-dark">
				<tr>
				  <th>#</th>
			      <th>Tên bài viết</th>
			      <th>Hình ảnh</th>
			      <th>Danh mục</th>
			      <th>Tóm tắt</th>
			      <th>Trạng thái</th>
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
						<img src="../modules/news/uploads/<?php echo $each['image'] ?>" alt="Hinh anh" width="150px">
					</td>
					<td><?php echo $each['name_category'] ?></td>
					<td><?php echo $each['description'] ?></td>
					<td>
						<?php if($each['status'] == 1) { 
								echo 'Kích hoạt';
							} else {
								echo 'Ẩn';
							}
						?>
					</td>
					<td>
						<a href="?controller=news&action=edit&id=<?php echo $each['id'] ?>" class="btn__common btn-primary text-decoration-none">Sửa</a>
					</td>
					<td>
						<a href="../modules/news/process.php?id=<?php echo $each['id']?>" class="btn__common btn-primary text-decoration-none">Xóa</a>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>


<!-- Phân Trang -->

<?php 
	$sql_page = "select * from news";
	$count_record = mysqli_num_rows(mysqli_query($connect,$sql_page));
	$page = ceil($count_record/$limit); // tổng số trang;

	
 ?>

<ul class="pagination justify-content-end mt-5">
	<?php if($current_page > 1) { ?>
		<li class="page-item">
			<a class="page-link font-16" href="?controller=news&page=<?php echo (int)$current_page-1  ?>">Previous</a>
		</li>
	<?php } for ($i=1; $i <= $page ; $i++) { ?>
		<li class="page-item">
			<a <?php if ($i == $current_page) { echo 'style="opacity: 0.3;"';} else {echo '';}?>  class="page-link font-16"  href="?controller=news&page=<?php echo $i ?>"><?php echo $i ?></a>
		</li>
	<?php } if($current_page < $page) {?>
		<li class="page-item">
			<a class="page-link font-16" href="?controller=news&page=<?php echo (int)$current_page+1  ?>">Next</a>
		</li>
	<?php } ?>
</ul>