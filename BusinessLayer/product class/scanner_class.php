<?php
class Scanner{
    public $name;
    public $model;
    public $keyFeatures;
    public $productId;
    public $brand;
    public $speed;
    public $resoulation;
    public $connectivity;
    public $model_no;
    public $price;
    public $quantity;
    public $description;
    public $picture;
   

    function __construct($name,$model,$keyFeatures,$scanner_id,$brand,$speed, $resoulation,$connectivity,$model_no,$price, $quantity, $description, $picture ){
        $this->name = $name;
        $this->model = $model;
        $this->keyFeatures = $keyFeatures;
        $this->productId = $scanner_id;
        $this->brand = $brand;
        $this->speed = $speed;
        $this->resoulation = $resoulation;
        $this->connectivity = $connectivity;
        $this->model_no = $model_no;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->picture = $picture;
       
    }

}

?>