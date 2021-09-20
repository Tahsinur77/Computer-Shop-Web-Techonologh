<?php
class Cooler{
    public $name;
    public $model;
    public $keyFeatures;
    public $productId;
    public $brand;
    public $type;
    public $coolerModel;
    public $price;
    public $quantity;
    public $description;
    public $picture;

    function __construct($name,$model,$keyFeatures,$coolerId,$brand,$type, $coolerModel,$price, $quantity, $description, $picture ){
        $this->name = $name;
        $this->model = $model;
        $this->keyFeatures = $keyFeatures;
        $this->productId = $coolerId;
        $this->brand = $brand;
        $this->type = $type;
        $this->coolerModel = $coolerModel;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->picture = $picture;
       
    }

}

?>