<?php
class Projector{
    public $name;
    public $model;
    public $keyFeatures;
    public $productId;
    public $brand;
    public $lumnes;
    public $display_technology;
    public $contrast_ratio;
    public $model_no;
    public $price;
    public $quantity;
    public $description;
    public $picture;
   

    function __construct($name,$model,$keyFeatures,$projector_id,$brand,$lumnes, $display_technology,$contrast_ratio,$model_no,$price, $quantity, $description, $picture ){
        $this->name = $name;
        $this->model = $model;
        $this->keyFeatures = $keyFeatures;
        $this->productId = $projector_id;
        $this->brand = $brand;
        $this->lumnes = $lumnes;
        $this->display_technology = $display_technology;
        $this->contrast_ratio = $contrast_ratio;
        $this->model_no = $model_no;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->picture = $picture;
       
    }

}

?>