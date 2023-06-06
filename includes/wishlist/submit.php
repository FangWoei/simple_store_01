<?php


if ( class_exists( 'Products' ) ) 
$products = new Products();

// instructions: if the form was submitted, add the product to the wishlist or remove it from the wishlist (if it's already in the wishlist)

// get all the POST data
$product_id = $_POST['id'];

// trigger togglewishlist function
$products->toggleWishlist($product_id);

