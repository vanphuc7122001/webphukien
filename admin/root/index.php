<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang Admin</title>
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./font/fontawesome-free-6/css/all.min.css">
	<link rel="stylesheet" href="./bootstrap/bootstrap-4.6.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<?php require_once ("./layouts/header.php") ?>

		<!-- Begin Content -->
		<div class="main">
			<div class="row">
				<div class="col-md-2">
					<?php require_once ("./layouts/sidebar.php") ?>
					
				</div>
				<div class="col-md-10">
					<?php require_once ("./route.php") ?>
				</div>
			</div>
		</div>
		<!-- End main -->
		<?php require_once ("./layouts/footer.php") ?>

		
	</div>
	<script src="./bootstrap/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<!-- Link thư viện skeditor -->
	<script src="./js/ckeditor/ckeditor.js"></script>
	<script>
		CKEDITOR.replace('content');
		CKEDITOR.replace('description');
	</script>
</body>
</html>