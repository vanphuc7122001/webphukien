<?php 
	$sql = "select * from product_category";
	$result = mysqli_query($connect,$sql);
?>

<div class="card rounded">
	<div class="card-header font-20 bg-dark text-white">
		Thêm sản phẩm
	</div>
	<div class="card-body">
		<form action="../modules/product/process.php" method="post" enctype="multipart/form-data">
			<div class="form-group font-16">
				<label for="name">Tên sản phẩm</label>
    			<input type="text" class="form-control font-12" placeholder="Nhập tên danh mục cần thêm" id="name" name="name">
			</div>
			<div class="form-group font-16">
				<label for="price">Giá sản phẩm</label>
    			<input type="text" class="form-control font-12" placeholder="Nhập tên danh mục cần thêm" id="price" name="price">
			</div>
			<div class="form-group font-16">
				<label for="quantity">Số lượng</label>
    			<input type="text" class="form-control font-12" placeholder="Nhập tên danh mục cần thêm" id="quantity" name="quantity">
			</div>
			<div class="form-group font-16">
				<label for="image">Hình ảnh</label>
    			<input type="file" class="form-control-file font-12" placeholder="Nhập tên danh mục cần thêm" id="image" name="image">
			</div>
			<div class="form-group font-16">
				<label for="content">Nội dung</label>
    			<textarea class="form-control" id="content" name="content"></textarea>
			</div>
			<div class="form-group font-16">
				<label for="description">Tóm tắt</label>
    			<textarea class="form-control" id="description" name="description"></textarea>
			</div>
			<div class="form-group font-16"> 
				<label for="category">Danh mục sản phẩm</label>
				<select class="form-control mb-15 font-12" id="category" name="category" style="margin-bottom: 40px;">
					<?php foreach ($result as $each): ?>
						<option value="<?php echo $each['id'] ?>"><?php echo $each['name'] ?></option>
					<?php endforeach ?>
				</select> 
			</div>
			<div class="form-group font-16"> 
				<label for="status">Tình trạng</label>
				<select class="form-control mb-15 font-12" id="status" name="status" style="margin-bottom: 40px;">
	  				<option value="1">Kích hoạt</option>
	  				<option value="0">Ẩn</option>
				</select> 
			</div>
			<input class="btn btn-primary btn-block font-12" type="submit" name="store" value="Thêm">
		</form>
	</div>

</div>