<?php
namespace Model;

class Product{
    public $id;
    public $name;
    public $price;
    
    public function __construct(int $id,string $name,$price){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
}