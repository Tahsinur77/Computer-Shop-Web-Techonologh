<?php
class Mouse{
    public $name;
    public $model;
    public $keyFeatures;
    public $productId;
    public $brand;
    public $type;
    public $interface;
    public $mouse_number_of_keys;
    public $model_no;
    public $price;
    public $quantity;
    public $description;
    public $picture;
   

    function __construct($name,$model,$keyFeatures,$mouse_id,$brand,$type, $interface,$mouse_number_of_keys,$model_no,$price, $quantity, $description, $picture ){
        $this->name = $name;
        $this->model = $model;
        $this->keyFeatures = $keyFeatures;
        $this->productId = $mouse_id;
        $this->brand = $brand;
        $this->type = $type;
        $this->interface = $interface;
        $this->mouse_number_of_keys = $mouse_number_of_keys;
        $this->model_no = $model_no;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->picture = $picture;
       
    }

}

?>