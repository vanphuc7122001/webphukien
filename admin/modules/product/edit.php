<?php 
	$id = $_GET['id'];
	$sql = "select * from product where id = '$id'";
	$result = mysqli_query($connect,$sql);
	
 ?>

<div class="card rounded">
	<div class="card-header font-20 bg-dark text-white">
		Sửa sản phẩm
	</div>
	<div class="card-body">
		<form action="../modules/product/process.php" method="post" enctype="multipart/form-data">
			<?php foreach ($result as $each): ?>
			<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
				<div class="form-group font-16">
					<label for="name">Tên sản phẩm</label>
	    			<input type="text" class="form-control font-12" placeholder="Nhập tên danh mục cần thêm" id="name" name="name"
	    			value="<?php echo $each['name'] ?>">
				</div>
				<div class="form-group font-16">
					<label for="price">Giá sản phẩm</label>
	    			<input type="text" class="form-control font-12" placeholder="Nhập tên danh mục cần thêm" id="price" name="price" value="<?php echo $each['price'] ?>">
				</div>
				<div class="form-group font-16">
					<label for="quantity">Số lượng</label>
	    			<input type="text" class="form-control font-12" placeholder="Nhập tên danh mục cần thêm" id="quantity" name="quantity" value="<?php echo $each['quantity'] ?>">
				</div>
				<div class="form-group font-16">
					<label for="image">Hình ảnh</label>
					<img src="../modules/product/uploads/<?php echo $each['image'] ?>" alt="">
	    			<input type="file" class="form-control-file font-12" placeholder="Nhập tên danh mục cần thêm" id="image" name="image">
				</div>
				<div class="form-group font-16">
					<label for="content">Nội dung</label>
	    			<textarea class="form-control" id="content" name="content">
	    				<?php echo $each['content'] ?>
	    			</textarea>
				</div>
				<div class="form-group font-16">
					<label for="description">Tóm tắt</label>
	    			<textarea class="form-control" id="description" name="description">
	    				<?php echo $each['description'] ?>
	    			</textarea>
				</div>
				<div class="form-group font-16"> 
					<?php 
						$sql = "select * from product_category order by id";
						$result = mysqli_query($connect,$sql);
					 ?>
					<label for="category">Danh mục sản phẩm</label>
					<select class="form-control mb-15 font-12" id="category" name="category" style="margin-bottom: 40px;">
						<?php foreach ($result as $row): 
							if($each['id_category'] == $row['id']) { 
						?>
								<option selected value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
						<?php } else { ?>
								<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
						<?php  } endforeach ?>
					</select> 
				</div>
				<div class="form-group font-16"> 
					<label for="status">Tình trạng</label>
					<select class="form-control mb-15 font-12" id="status" name="status" style="margin-bottom: 40px;">
						<?php if($each['status'] == 1) {?>
			  				<option value="0">Ẩn</option>
		  					<option value="1" selected>Kích hoạt</option>
			  			<?php } else { ?>
			  				<option value="0" selected>Ẩn</option>
		  					<option value="1">Kích hoạt</option>
			  			<?php } ?>
					</select> 
				</div>
				<input class="btn btn-primary btn-block font-12" type="submit" name="update" value="Sửa">
			<?php endforeach ?>
		</form>
	</div>

</div>