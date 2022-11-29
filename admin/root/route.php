<?php 
require_once '../config/connect.php';

$controller = $_GET['controller'] ?? '';
$action = $_GET['action'] ?? '';



switch ($controller) {
	case 'productCategory':
		switch ($action) {
			case 'create':
				require_once '../modules/productCategory/create.php';
				break;
			case 'edit':
				require_once '../modules/productCategory/edit.php';
				break;
			default:
				require_once '../modules/productCategory/index.php';
				break;
		}
		break;
	case 'product':
		switch ($action) {
			case 'create':
				require_once '../modules/product/create.php';
				break;
			case 'edit':
				require_once '../modules/product/edit.php';
				break;
			default:
				require_once '../modules/product/index.php';
				break;
		}
	break;
	case 'newsCategory':
		switch ($action) {
			case 'create':
				require_once '../modules/newsCategory/create.php';
				break;
			case 'edit':
				require_once '../modules/newsCategory/edit.php';
				break;
			default:
				require_once '../modules/newsCategory/index.php';
				break;
		}
		break;
	case 'news':
		switch ($action) {
			case 'create':
				require_once '../modules/news/create.php';
				break;
			case 'edit':
				require_once '../modules/news/edit.php';
				break;
			default:
				require_once '../modules/news/index.php';
				break;
		}
		break;
	case 'orders':
		switch ($action) {
			case 'view_detail':
				require_once '../modules/orders/view_detail.php';
				break;
			case 'update':
				require_once '../modules/orders/update.php';
				break;
			default:
				require_once '../modules/orders/index.php';
				break;
		}
		break;
	default:
		require_once '../modules/productCategory/index.php';
		break;
}


mysqli_close($connect);

