<?php
class Ram{
    public $name;
    public $model;
    public $keyFeatures;
    public $productId;
    public $brand;
    public $speed;
    public $capacity;
    public $type;
    public $ramModel;
    public $price;
    public $quantity;
    public $description;
    public $picture;

    function __construct($name,$model,$keyFeatures,$productId,$brand,$speed,$capacity, $type, $ramModel,$price, $quantity, $description, $picture ){
        $this->name = $name;
        $this->model = $model;
        $this->keyFeatures = $keyFeatures;
        $this->productId = $productId;
        $this->brand = $brand;
        $this->speed = $speed;
        $this->capacity = $capacity;
        $this->type = $type;
        $this->ramModel = $ramModel;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->picture = $picture;
       
    }

}

?>