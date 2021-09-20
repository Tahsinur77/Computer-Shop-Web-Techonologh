<?php
class Photocopier{
    public $name;
    public $model;
    public $keyFeatures;
    public $productId;
    public $brand;
    public $speed;
    public $interface;
    public $paper_size;
    public $model_no;
    public $price;
    public $quantity;
    public $description;
    public $picture;
   

    function __construct($name,$model,$keyFeatures,$photocopier_id,$brand,$speed, $interface,$paper_size,$model_no,$price, $quantity, $description, $picture ){
        $this->name = $name;
        $this->model = $model;
        $this->keyFeatures = $keyFeatures;
        $this->productId = $photocopier_id;
        $this->brand = $brand;
        $this->speed = $speed;
        $this->interface = $interface;
        $this->paper_size = $paper_size;
        $this->model_no = $model_no;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->picture = $picture;
       
    }

}

?>