<?php
session_start();

class P50_AddToCart {
    public function main(): void {
        // Write your code here
        if (session_status() === PHP_SESSION_NONE) {
            @session_start();
        }

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_GET['item']) && $_GET['item'] !== '') {
            $_SESSION['cart'][] = $_GET['item'];
        }

        echo implode(",", $_SESSION['cart']);
       
    }
}
