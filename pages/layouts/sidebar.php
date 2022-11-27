<?php 
	$sql = "select * from product_category";
	$result = mysqli_query($connect,$sql);
 ?>
	<div class="col-md-2">
		<!-- Danh mục sản phẩm -->
		<div class="list-group">
		  <a href="#" class="list-group-item list-group-item-action active">Danh mục sản phẩm</a>
		  <?php foreach ($result as $key => $each): ?>	  	
		  <a href="?action=product_category&id=<?php echo $each['id'] ?>" class="list-group-item list-group-item-action"><?php echo $each['name'] ?></a>
		  <?php endforeach ?>
		</div>
			<!-- Tin tức -->
		<div class="list-group" style="margin-top: 20px;">
		  <a href="#" class="list-group-item list-group-item-action active">Tin Tức</a>
		  <a href="#" class="list-group-item list-group-item-action">First item</a>
		  <a href="#" class="list-group-item list-group-item-action">Second item</a>
		  <a href="#" class="list-group-item list-group-item-action">Third item</a>
		</div>
	</div>
	<!-- End side bar -->