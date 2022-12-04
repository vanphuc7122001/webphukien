<?php 
	$search = $_POST['search'] ?? '';
	$sql = "select product.*,product_category.name as name_category 
			from product join product_category 
			on product.id_category = product_category.id
			where product.name like '%$search%'";
	// die($sql);
	$result	= mysqli_query($connect,$sql);
	$count_record = mysqli_num_rows($result);
	// echo $count_record;
	if($count_record > 0){
 ?>
		 <h3 class="font-weight-light text-center my-4 text-danger">SẢN PHẨM CẦN TÌM</h3>
		    <ul class="product_list"> 
		    <?php foreach ($result as $each): ?>                                               
		      <li>
		        <div class="post-item">
		          <div class="product-top">
		            <a href="?action=product_detail&id=<?php echo $each['id'] ?>">
		              <div class="product-img">
		                  <img src="./admin/modules/product/uploads/<?php echo $each['image'] ?>">
		              </div>
		                
		                <p class="title_product"><?php echo $each['name'] ?></p>
		                <p class="price_product"><?php  echo number_format($each['price'],0,"",".") . ' VND' ?></p>
		                <p style="text-align: center; color:rgb(170, 170, 170)"><?php echo $each['name_category'] ?></p>
		                <?php if(!empty($_SESSION['id'])) { ?>
		                          <a class="btn btn-primary w-100" href="?action=add_to_cart&id=<?php echo $each['id'] ?>">Thêm vào giỏi hàng</a>
		                <?php } ?>
		            </a>
		          </div>
		        </div>
		      </li>
		      <?php endforeach ?>          
		</ul>
<?php } else { ?>

	<h4 class="text-center text-danger">Sản phẩm bạn cần tìm hiện tại shop đã hết hàng</h4>

<?php } ?>