<!-- Product.php -->
<?php

class Product {
    private $productId;
    private $name;
    private $price;

    public function __construct($productId, $name, $price) {
        $this->productId = $productId;
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}

?>
