<?php
class Motherboard{
    public $name;
    public $model;
    public $keyFeatures;
    public $productid;
    public $brand;
    public $type;
    public $motherboardModel;
    public $price;
    public $quantity;
    public $description;
    public $picture;

    function __construct($name,$model,$keyFeatures,$productid,$brand,$type, $motherboardModel,$price, $quantity, $description, $picture ){
        $this->name = $name;
        $this->model = $model;
        $this->keyFeatures = $keyFeatures;
        $this->productId = $productid;
        $this->brand = $brand;
        $this->type = $type;
        $this->motherboardModel = $motherboardModel;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->picture = $picture;
       
    }

}

?>