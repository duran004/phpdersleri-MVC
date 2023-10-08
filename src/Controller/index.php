<?php
include __DIR__."/../../vendor/autoload.php";
use Model\Cart;
use Model\Product;
$product1 = new Product(1,"Laptop",5000);
$product2 = new Product(2,"Mouse",250);
$cart= new Cart();
$cart->addProduct($product1);
$cart->addProduct($product2);
$cart->addProduct($product2);
$cart->addProduct(new Product(3,"Keyboard",500));
$cart->addProduct(new Product(4,"Keyboard",700));

$products=$cart->getProducts();
include __DIR__."/../View/index.php";