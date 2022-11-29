<div class="card rounded">
	<div class="card-header font-20 bg-dark text-white">
		Thêm danh mục sản phẩm
	</div>
	<div class="card-body">
		<form action="../modules/productCategory/process.php" method="post">
			<div class="form-group font-16">
				<label for="name">Tên danh mục sản phẩm:</label>
    			<input type="text" class="form-control font-12" placeholder="Nhập tên danh mục cần thêm" id="name" name="name" required>
			</div>
			<input class="btn btn-primary btn-block" type="submit" name="store" value="Thêm">
		</form>
	</div>

</div>