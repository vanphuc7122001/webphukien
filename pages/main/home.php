

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="d-block w-100" src="./img/slide1.png" alt="First slide">
              </div>
              <div class="carousel-item">
                  <img class="d-block w-100" src="./img/slide2.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                  <img class="d-block w-100" src="./img/slide3.png" alt="Third slide">
              </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>
  </div>
</div>

<?php 
  $sql = "select product.*, product_category.name as name_category from product 
          join product_category on product.id_category = product_category.id";
  $result = mysqli_query($connect,$sql);
 ?>
<h3 class="font-weight-light text-center my-4 text-danger">TẤT CẢ SẢN PHẨM</h3>
    <ul class="product_list"> 
    <?php foreach ($result as $key => $each): ?>                                               
      <li>
        <div class="post-item">
          <div class="product-top">
            <a href="#">
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