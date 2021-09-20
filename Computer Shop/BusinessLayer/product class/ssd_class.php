<?php
class Ssd{
    public $name;
    public $model;
    public $keyFeatures;
    public $productId;
    public $brand;
    public $speed;
    public $capacity;
    public $write_speed;
    public $model_no;
    public $price;
    public $quantity;
    public $description;
    public $picture;
   

    function __construct($name,$model,$keyFeatures,$ssd_id,$brand,$speed, $capacity,$write_speed,$model_no,$price, $quantity, $description, $picture ){
        $this->name = $name;
        $this->model = $model;
        $this->keyFeatures = $keyFeatures;
        $this->productId = $ssd_id;
        $this->brand = $brand;
        $this->speed = $speed;
        $this->capacity = $capacity;
        $this->write_speed = $write_speed;
        $this->model_no = $model_no;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->picture = $picture;
       
    }

}

?>