<?php
class Processor{
    public $name;
    public $model;
    public $keyFeatures;
    public $productid;
    public $brand;
    public $processorModel;
    public $clockSpeed;
    public $core;
    public $thread;
    public $tdp;
   
    public $price;
    public $quantity;
    public $description;
    public $picture;

    function __construct($name,$model,$keyFeatures,$productid,$brand,$processorModel, $clockSpeed,$core,$thread,$tdp,$price, $quantity, $description, $picture ){
        $this->name = $name;
        $this->model = $model;
        $this->keyFeatures = $keyFeatures;
        $this->productId = $productid;
        $this->brand = $brand;
        $this->processorModel = $processorModel;
        $this->clockSpeed = $clockSpeed;
        $this->core = $core;
        $this->thread = $thread;
        $this->tdp = $tdp;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->picture = $picture;
       
    }

}

?>