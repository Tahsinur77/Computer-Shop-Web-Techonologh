<?php
class Monitor{
    public $name;
    public $model;
    public $keyFeatures;
    public $productId;
    public $brand;
    public $refreshRate;
    public $inputType;
    public $resulation;
    public $monitorModel;
    public $price;
    public $quantity;
    public $description;
    public $picture;

    function __construct($name,$model,$keyFeatures,$productId,$brand,$refreshRate,$inputType,$resulation, $monitorModel,$price, $quantity, $description, $picture ){
        $this->name = $name;
        $this->model = $model;
        $this->keyFeatures = $keyFeatures;
        $this->productId = $productId;
        $this->brand = $brand;
        $this->refreshRate = $refreshRate;
        $this->inputType = $inputType;
        $this->resulation = $resulation;
       
        $this->monitorModel = $monitorModel;
       
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->picture = $picture;
       
    }

}

?>