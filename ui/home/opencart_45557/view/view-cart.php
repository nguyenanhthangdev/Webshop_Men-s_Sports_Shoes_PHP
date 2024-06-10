<?php 
if (cartGetProductsWithFormat()) {
	include_once "view-cart-products.php";
} else { 
	include_once "view-cart-empty.php";
} 