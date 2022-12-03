

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

<?php 
  $limit = 8; 
  $current_page = $_GET['page'] ?? '1';
  if($current_page == '' || $current_page == 1){
    $start = 0;
  }else{
    $start = ($current_page * $limit) - $limit;
  }


  // số bản ghi có trong 1 trang
  $sql = "select product.*, product_category.name as name_category from product 
          join product_category on product.id_category = product_category.id where product.status = 1 limit $start,$limit";

  // die($sql);
  $result = mysqli_query($connect,$sql);
 ?>
<h3 class="font-weight-light text-center my-4 text-danger">TẤT CẢ SẢN PHẨM</h3>
    <ul class="product_list"> 
    <?php foreach ($result as $key => $each): ?>                                               
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

<?php
      if(!empty($_SESSION['status'])) {
?>
      <script>
          alert("<?php echo $_SESSION['status'] ?>");
      </script>
<?php } 
    unset($_SESSION['status']);
?>



<!-- Phân trang -->
<?php 
  $sql_page = "select * from product";
  $rs_page = mysqli_query($connect,$sql_page);
  $count_record = mysqli_num_rows($rs_page); // đếm số bản ghi
  $page = ceil($count_record/$limit); // tổng số trang 
  ?>

<nav class="nav_pagination">
  <ul class="pagination justify-content-end">
    <?php if($current_page > 1) { ?>
        <li class="page-item"><a class="page-link" href="?page=<?php echo ($current_page-1) ?>">Previous</a></li>
    <?php } for ($i=1; $i <= $page ; $i++) { ?>
        <li class="page-item"><a class="page-link" href="?page=<?php echo $i ?>"><?php echo $i ?></a></li>
    <?php } if($current_page < $page) { ?>
        <li class="page-item"><a class="page-link" href="?page=<?php echo ($current_page+1) ?>">Next</a></li>
    <?php } ?>
  </ul>
</nav>