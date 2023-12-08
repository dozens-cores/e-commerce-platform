<!-- EcommerceApp.php -->
<?php

include 'User.php';
include 'Product.php';
include 'ShoppingCart.php';

// Create users
$user1 = new User(1, 'john_doe', 'john.doe@example.com');
$user2 = new User(2, 'jane_smith', 'jane.smith@example.com');

// Create products
$product1 = new Product(101, 'Laptop', 999.99);
$product2 = new Product(102, 'Smartphone', 599.99);
$product3 = new Product(103, 'Headphones', 79.99);

// Create shopping carts
$cart1 = new ShoppingCart();
$cart2 = new ShoppingCart();

// Users add products to their carts
$user1->addToCart($product1);
$user1->addToCart($product2);
$user2->addToCart($product2);
$user2->addToCart($product3);

// Display cart contents for each user
$user1->viewCart();
echo "\n";
$user2->viewCart();

?>
