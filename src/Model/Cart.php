<?php
namespace Model;

class Cart{
    public $items=[];
    public function addProduct(Product $product){
        $this->items[] = $product;
    }
    public function getProducts(){
        return $this->items;
    }
}