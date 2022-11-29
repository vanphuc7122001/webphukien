<?php 

$id = $_GET['id'] ?? '';

 unset($_SESSION['cart'][$id]);

 header('location:index.php?action=view_cart');

 