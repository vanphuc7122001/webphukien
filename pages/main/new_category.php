<?php 
	$limit	= 3;
	$current_page = $_GET['page'] ?? 1;
	if($current_page == 1 || $current_page == ''){
		$start = 0;
	}else{
		$start = ($current_page*$limit) - $limit;
	}
	$id = $_GET['id'];
	$sql = "select news.*, news_category.name as name_category
			from news join news_category
			on news_category.id = news.id_category where news.id_category = '$id' and news.status = 1 limit	$start,$limit";
	$result = mysqli_query($connect,$sql);
 ?>



<?php foreach ($result as $each): ?>
<a href="?action=news_detail&id=<?php echo $each['id'] ?>" class="text-decoration-none text-secondary">
<div class="card mb-3" style="min-height: 200px;">
  <div class="card-body">
	    <div class="row">
		      <div class="col-sm-4" style="border-right: 1px solid #ccc;">
			        <div class="position-relative">
			          <div class="rotate-img">
			            <img src="./admin/modules/news/uploads/<?php echo $each['image']?>" alt="anh" class="img-fluid" width="200px">
			          </div>
			          <div class="position-absolute" style="top: 0;right: 0;">
			            <span class="badge badge-danger font-weight-bold">new</span>
			          </div>
			        </div>
		      </div>
		      <div class="col-sm-8 p-2">
			        <h4 class="mb-3 font-weight-600">
			          <?php echo $each['name'] ?>
			        </h4>
			        <div class="mt-5">
			          <span class="mr-2">Đã đăng </span><?php echo $each['posted_at'] ?>
			        </div>
			      </div>
		      </div>
   </div>
</div>
</a>
<?php endforeach ?>

<!-- Phân trang -->

<?php 
	$sql_page =  "select * from news where id_category = '$id'";
	$rs_page = mysqli_query($connect,$sql_page);
	$count_record = mysqli_num_rows($rs_page);
	$page = ceil($count_record/$limit);
 ?>


<ul class="pagination justify-content-end">
	<?php if ($current_page > 1): ?>
    	<li class="page-item"><a class="page-link" href="?action=new_category&id=<?php echo $id ?>&page=<?php echo $current_page-1 ?>">Previous</a></li>
	<?php endif ?>
    <?php for ($i=1; $i <= $page ; $i++) { 
    	if($current_page == $i){
    ?>
    	<li class="page-item" style="opacity: 0.4;"><a class="page-link" href="?action=new_category&id=<?php echo $id ?>&page=<?php echo $i ?>"><?php echo $i ?></a></li>
	<?php } else { ?>
	   	<li class="page-item"><a class="page-link" href="?action=new_category&id=<?php echo $id ?>&page=<?php echo $i ?>"><?php echo $i ?></a></li>
	<?php }
	}if ($current_page < $page ): ?>
    	<li class="page-item"><a class="page-link" href="?action=new_category&id=<?php echo $id ?>&page=<?php echo $current_page+1 ?>">Next</a></li>
	<?php endif ?>

</ul>



