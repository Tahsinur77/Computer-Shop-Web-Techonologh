<?php
class Headphone{
    public $name;
    public $model;
    public $keyFeatures;
    public $productId;
    public $brand;
    public $type;
    public $interface;
    public $color;
    public $model_no;
    public $price;
    public $quantity;
    public $description;
    public $picture;
   

    function __construct($name,$model,$keyFeatures,$headphone_id,$brand,$type, $interface,$color,$model_no,$price, $quantity, $description, $picture ){
        $this->name = $name;
        $this->model = $model;
        $this->keyFeatures = $keyFeatures;
        $this->productId = $headphone_id;
        $this->brand = $brand;
        $this->type = $type;
        $this->interface = $interface;
        $this->color = $color;
        $this->model_no = $model_no;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->picture = $picture;
       
    }

}

?>