<?php
class Keyboard{
    public $name;
    public $model;
    public $keyFeatures;
    public $productId;
    public $brand;
    public $type;
    public $interface;
    public $switch_type;
    public $model_no;
    public $price;
    public $quantity;
    public $description;
    public $picture;
   

    function __construct($name,$model,$keyFeatures,$keyboard_id,$brand,$type, $interface,$switch_type,$model_no,$price, $quantity, $description, $picture ){
        $this->name = $name;
        $this->model = $model;
        $this->keyFeatures = $keyFeatures;
        $this->productId = $keyboard_id;
        $this->brand = $brand;
        $this->type = $type;
        $this->interface = $interface;
        $this->switch_type = $switch_type;
        $this->model_no = $model_no;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->picture = $picture;
       
    }

}

?>