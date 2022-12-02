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
<?php 
	$sql_news_category = "select *  from news_category";
	$rs_news_category = mysqli_query($connect,$sql_news_category);
 ?>
		<div class="list-group" style="margin-top: 20px;">
		  <a href="#" class="list-group-item list-group-item-action active">Tin Tức</a>
		  <?php foreach ($rs_news_category as $each_new): ?>
		  <a href="?action=new_category&id=<?php echo $each_new['id'] ?>" class="list-group-item list-group-item-action"><?php echo $each_new['name'] ?></a>
		  <?php endforeach ?>
		</div>
	</div>
	<!-- End side bar -->