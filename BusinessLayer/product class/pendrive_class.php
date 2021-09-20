<?php
class Pendrive{
    public $name;
    public $model;
    public $keyFeatures;
    public $productId;
    public $brand;
    public $connectivity;
    public $capacity;
    public $model_no;
    public $price;
    public $quantity;
    public $description;
    public $picture;
   

    function __construct($name,$model,$keyFeatures,$pendrive_id,$brand,$connectivity, $capacity,$model_no,$price, $quantity, $description, $picture ){
        $this->name = $name;
        $this->model = $model;
        $this->keyFeatures = $keyFeatures;
        $this->productId = $pendrive_id;
        $this->brand = $brand;
        $this->connectivity = $connectivity;
        $this->capacity = $capacity;
        $this->model_no = $model_no;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->picture = $picture;
       
    }

}

?>