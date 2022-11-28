<?php 
	$id = $_GET['id'];
	$sql = "select product.*, product_category.name as name_category
			from product join product_category on product.id_category = product_category.id
			where product.id = '$id'";
	$result = mysqli_query($connect,$sql);
 ?>
<div class="container">
	<h4>Chi tiết sản phẩm</h4>
	<?php foreach ($result as $key => $each): ?>	
	<div class="row">
		<div class="col-md-6 text-center">
			<img src="./admin/modules/product/uploads/<?php echo $each['image'] ?>" alt="" width="60%">
		</div>
		<div class="col-md-6">
			<h3> <?php echo $each['name'] ?> </h3>
			<p>Mã sản phẩm: <b><?php echo $each['id'] ?></b></p>
			<p>Giá sản phẩm: <b> <?php  echo number_format($each['price'],0,"",".") . ' VND' ?> </b></p>
			<p>Danh mục sản phẩm: <b> <?php echo $each['name_category'] ?> </b></p>
			<div class="mt-5">
				<a class="btn btn-primary" href="?action=add_to_cart&id=<?php echo $each['id'] ?>">Thêm vào giỏi hàng</a>
			</div>
			
		</div>
	</div>
</div>
<!-- Tab -->
<div class="tabs">
	  <ul id="tabs-nav">
		    <li><a href="#tab1" >Tóm tắt</a></li>
		    <li><a href="#tab2" >Nội dung chi tiết</a></li>
		    <li><a href="#tab3" >Hình ảnh</a></li>
	  </ul> <!-- END tabs-nav -->
	  <div id="tabs-content">
		    <div id="tab1" class="tab-content">
		    	<?php echo $each['description'] ?>
		    </div>
		    <div id="tab2" class="tab-content">
		    	<?php echo $each['content'] ?>
		    </div>
		    <div id="tab3" class="tab-content">
				<img src="./admin/modules/product/uploads/<?php echo $each['image'] ?>" alt="" width="100%">
		    </div>
	  </div> 
</div> 
<?php endforeach ?>


        <br>  
        <h3>Bình luận sản phẩm</h3>
<form autocomplete="off" action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên người bình luận</label>
    <input type="text" class="form-control" name="tenbinhluan" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="...">
     <input type="hidden" name="id_sanpham" value="163">
    <small id="emailHelp" class="form-text text-muted">Bình luận sẽ bị ẩn cho đến khi được duyệt</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Bình luận</label>
    <textarea rows="5" name="binhluan" style="resize: none" class="form-control" id="exampleInputPassword1" placeholder="..."></textarea>
  </div>
 
  <button type="submit" name="binhluan_submit" class="btn btn-primary">Gửi bình luận</button>
</form>
