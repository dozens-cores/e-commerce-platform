<!-- User.php -->
<?php

class User {
    private $userId;
    private $username;
    private $email;
    private $cart;

    public function __construct($userId, $username, $email) {
        $this->userId = $userId;
        $this->username = $username;
        $this->email = $email;
        $this->cart = [];
    }

    public function addToCart($product) {
        $this->cart[] = $product;
    }

    public function viewCart() {
        echo "Shopping Cart for User: {$this->username}\n";
        foreach ($this->cart as $product) {
            echo "- {$product->getName()} \${$product->getPrice()}\n";
        }
        echo "Total: \${$this->calculateTotal()}\n";
    }

    private function calculateTotal() {
        $total = 0;
        foreach ($this->cart as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }
}

?>
