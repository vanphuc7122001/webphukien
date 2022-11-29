<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web Phụ Kiện</title>
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./bootstrap/bootstrap-4.6.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="./font/fontawesome-free-6.2.0-web/css/all.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<?php 
			require_once './admin/config/connect.php';
			require_once './pages/layouts/header.php';
			require_once './pages/layouts/menu.php';
			require_once './pages/main/main.php';
			require_once './pages/layouts/footer.php';
		 ?>
	</div>



	<script src="js/jquery/jquery.min.js"></script>
	<script>
		// Show the first tab and hide the rest
		$('#tabs-nav li:first-child').addClass('active');
		$('.tab-content').hide();
		$('.tab-content:first').show();

		// Click function
		$('#tabs-nav li').click( function() {
				$('#tabs-nav li').removeClass('active');
				$(this).addClass('active');
				$('.tab-content').hide();
				var activeTab = $(this).find('a').attr('href');
				$(activeTab).fadeIn();
				return false;
		});
	</script>
</body>
</html>