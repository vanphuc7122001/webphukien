<?php 
	$id = $_GET['id'];
	$sql = "select * from product_category where id = '$id'";
	$result = mysqli_query($connect,$sql);
 ?>

<div class="card rounded">
	<div class="card-header font-20 bg-dark text-white">
		Sửa danh mục sản phẩm
	</div>
	<div class="card-body">
		<form action="../modules/productCategory/process.php" method="post">
			<input type="hidden" name="id_update" value="<?php echo $id ?>">
			<?php foreach ($result as $each): ?>
			<div class="form-group font-16">
				<label for="name">Tên danh mục sản phẩm:</label>
    			<input type="text" class="form-control font-12" placeholder="Nhập tên danh mục cần thêm" id="name" name="name" value="<?php echo $each['name'] ?>">
			</div>
			<input class="btn btn-primary btn-block" type="submit" name="update" value="Sửa">
			<?php endforeach ?>
		</form>
	</div>

</div>