<div class="row" style="margin-top: 20px;">
	<!-- Begin side bar -->
	<?php include 'pages/layouts/sidebar.php'; ?>
	<!-- Begin main -->
	<div class="col-md-10">
		<?php 
			$action = $_GET['action'] ?? '';

			switch ($action) {
				case 'history':
					require_once './pages/main/history.php';
					break;
				case 'policy':
					require_once './pages/main/policy.php';
					break;
				case 'payments':
					require_once './pages/main/payments.php';
					break;
				case 'contact':
					require_once './pages/main/contact.php';
					break;
				case 'product_category':
					require_once './pages/main/product_category.php';
					break;
				case 'product_detail':
					require_once './pages/main/product_detail.php';
					break;
				case 'add_to_cart':
					require_once './pages/main/cart/add_to_cart.php';
					break;
				case 'register':
					require_once './pages/main/signup.php';
					break;
				case 'login':
					require_once './pages/main/login.php';
					break;
				case 'logout':
					require_once './pages/main/process/process_logout.php';
					break;
				case 'view_cart':
					require_once './pages/main/cart/view_cart.php';
					break;
				case 'update_quantity_cart':
					require_once './pages/main/cart/update_quantity_cart.php';
					break;
				case 'delete_from_cart':
					require_once './pages/main/cart/delete_from_cart.php';
					break;
				case 'order':
					require_once './pages/main/cart/order.php';
					break;
				case 'new_category':
					require_once './pages/main/new_category.php';
					break;
				default:
					require_once './pages/main/home.php';
					break;
			}
		 ?>
	</div>
	<!-- End main -->
</div>