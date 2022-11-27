<?php 
	$id = $_GET['id'];
	$sql = "select * from news where id = '$id'";
	$result = mysqli_query($connect,$sql);
?>

<div class="card rounded">
	<div class="card-header font-20 bg-dark text-white">
		Sửa bài viết
	</div>
	<div class="card-body">
		<form action="../modules/news/process.php" method="post" enctype="multipart/form-data">
			<?php foreach ($result as $each): ?>
				<input type="hidden" name="id_update" value="<?php echo $each['id'] ?>">
			<div class="form-group font-16">
				<label for="name">Tên bài viết</label>
    			<input type="text" class="form-control font-12" placeholder="Nhập tên bài viết" id="name" name="name"
    			value="<?php echo $each['name'] ?>">
			</div>
			<div class="form-group font-16">
				<label for="image">Hình ảnh</label>
				<img src="../modules/news/uploads/<?php echo $each['image'] ?>" alt="">
    			<input type="file" class="form-control-file font-12" placeholder="" id="image" name="image">
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
					$sql_category = "select * from news_category order by id";
					$rs = mysqli_query($connect,$sql_category);
				 ?>
				<label for="category">Danh mục bài viết</label>
				<select class="form-control mb-15 font-12" id="category" name="category" style="margin-bottom: 40px;">
					<?php foreach ($rs as $row): 
						if($each['id_category'] == $row['id']){
					?>
						<option selected value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
					<?php } else { ?>
						<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
					<?php } endforeach ?>
				</select> 
			</div>
			<div class="form-group font-16"> 
				<label for="status">Trạng thái</label>
				<select class="form-control mb-15 font-12" id="status" name="status" style="margin-bottom: 40px;">
					<?php if($each['status'] == 1) { ?>
		  				<option selected value="1">Kích hoạt</option>
		  				<option value="0">Ẩn</option>
	  				<?php } else { ?>
	  					<option  value="1">Kích hoạt</option>
		  				<option selected value="0">Ẩn</option>
	  				<?php } ?>
				</select> 
			</div>
			<input class="btn btn-primary btn-block font-12" type="submit" name="update" value="Sửa">
			<?php endforeach ?>
		</form>
	</div>

</div>