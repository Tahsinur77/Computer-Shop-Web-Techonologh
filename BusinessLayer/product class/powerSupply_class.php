<?php
class PowerSupply{
    public $name;
    public $model;
    public $keyFeatures;
    public $productId;
    public $brand;
    public $wattage;
    public $powerSupplyModel;
    public $price;
    public $quantity;
    public $description;
    public $picture;

    function __construct($name,$model,$keyFeatures,$productId,$brand,$wattage, $powerSupplyModel,$price, $quantity, $description, $picture ){
        $this->name = $name;
        $this->model = $model;
        $this->keyFeatures = $keyFeatures;
        $this->productId = $productId;
        $this->brand = $brand;
        $this->wattage = $wattage;
       
        $this->powerSupplyModel = $powerSupplyModel;
       
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->picture = $picture;
       
    }

}

?>