<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./root/css/style.css">
	<link rel="stylesheet" href="./root/font/fontawesome-free-6/css/all.min.css">
	<link rel="stylesheet" href="./root/bootstrap/bootstrap-4.6.2/css/bootstrap.min.css">
	<title>Trang Đăng Nhập</title>

</head>
<body>
	
<div class="container font-16" style="width: 400px; margin-top: 170px;">
  <h4 class="text-center font-20">Đăng Nhập</h4>

  <form method="post" action="process_login.php">
    <div class="form-group">
        <label for="username">username</label>
        <input type="text" class="form-control font-12" id="username" placeholder="Nhập username" name="username" required>
    </div>
    <div class="form-group mt-3">
        <label for="password">password</label>
        <input type="password" class="form-control font-12" id="password" placeholder="Nhập password" name="password" required>
    </div>
    <input type="submit" name="login" class="btn btn-primary w-100 font-16 mt-3" value="Đăng Nhập">
  </form>
</div>







	<script src="./root/bootstrap/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
	<script src="./root/js/jquery/jquery.min.js"></script>
	<script src="./root/js/sweetalert/sweetalert.min.js"></script>

	<?php if(isset($_SESSION['status'])) { ?>
		<script>
			swal({
				  title: "<?php echo $_SESSION['status'];?>",
				  text: "<?php echo $_SESSION['text'];?>",
				  icon: "<?php echo $_SESSION['status_code']; ?>",
			});
		</script>
	<?php } 
		unset($_SESSION['status']);
		unset($_SESSION['text']);
		unset($_SESSION['status_code']);
	?>
</body>
</html>