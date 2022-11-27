<?php 
  $id = $_GET['id'];
  $sql = "select product.*, product_category.name as name_category from product 
          join product_category on product.id_category = product_category.id where product.id_category = '$id'";
  $result = mysqli_query($connect,$sql);

  while ($row = mysqli_fetch_array($result)) {
 ?>
    <h4 class="text-danger"><?php echo $row['name_category'] ?></h4>
    <ul class="product_list"> 
    <?php } foreach ($result as $each): ?>                                               
      <li>
        <div class="post-item">
          <div class="product-top">
            <a href="?action=product_detail&id=<?php echo $each['id'] ?>">
              <div class="product-img">
                  <img src="./admin/modules/product/uploads/<?php echo $each['image'] ?>">
              </div>
                
                <p class="title_product"><?php echo $each['name'] ?></p>
                <p class="price_product"><?php echo number_format($each['price']) . "VND" ?></p>
                <p style="text-align: center; color:rgb(170, 170, 170)"><?php echo $each['name_category'] ?></p>
            </a>
          </div>
        </div>
      </li>
      <?php endforeach ?>          
    </ul>