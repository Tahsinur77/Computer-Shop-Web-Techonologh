<?php
class Graphics{
    public $name;
    public $model;
    public $keyFeatures;
    public $productId;
    public $brand;
    public $capacity;
    public $type;
    public $graphicsModel;
    public $clockSpeed;
    public $price;
    public $quantity;
    public $description;
    public $picture;

    function __construct($name,$model,$keyFeatures,$productId,$brand,$capacity, $type, $graphicsModel,$clockSpeed,$price, $quantity, $description, $picture ){
        $this->name = $name;
        $this->model = $model;
        $this->keyFeatures = $keyFeatures;
        $this->productId = $productId;
        $this->brand = $brand;
        $this->capacity = $capacity;
        $this->type = $type;
        $this->graphicsModel = $graphicsModel;
        $this->clockSpeed = $clockSpeed;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->picture = $picture;
       
    }

}

?>