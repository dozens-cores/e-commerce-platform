<!-- ShoppingCart.php -->
<?php

class ShoppingCart {
    private $products;

    public function __construct() {
        $this->products = [];
    }

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function displayContents() {
        echo "Shopping Cart Contents:\n";
        foreach ($this->products as $product) {
            echo "- {$product->getName()} \${$product->getPrice()}\n";
        }
    }
}

?>
