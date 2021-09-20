<?php
class Laptop{

  public $name;
  public $model;
  public $keyFeatures;
  public $productId;
  public $brand;
  public $processorBrand;
  public $processorType;
  public $clockSpeed;
  public $noOfCore;
  public $noOfThread;
  public $screenSize;
  public $screenResulation;
  public $ramBusSpeed;
  public $ramCapacity;
  public $ramType;
  public $graphicsCardType;
  public $graphicsCardCapacity;
  public $graphicsCardMemoryType;
  public $hddCapacity;
  public $hddSpeed;
  public $hddFormFactor;
  public $ssdCapacity;
  public $ssdFormFactor;
  public $laptopModel;
  public $price;
  public $quantity;
  public $description;
  public $picture;

  function __construct($name,$model,$keyFeatures,$productId,$brand,$processorBrand,$processorType,$clockSpeed,$noOfCore,$noOfThread,$screenSize,$screenResulation,$ramBusSpeed,$ramCapacity,$ramType,$graphicsCardType, $graphicsCardCapacity,$graphicsCardMemoryType,$hddCapacity,$hddSpeed,$hddFormFactor,$ssdCapacity,$ssdFormFactor,$laptopModel,$price,$quantity,$description,$picture){
    $this->name = $name;
    $this->model = $model;
    $this->keyFeatures = $keyFeatures;
    $this->productId = $productId;
    $this->brand = $brand;
    $this->processorBrand=$processorBrand;
    
    $this->processorType = $processorType;
    $this->clockSpeed = $clockSpeed;
    $this->noOfCore = $noOfCore;
    $this->noOfThread = $noOfThread;
   
    $this->screenSize = $screenSize;
    $this->screenResulation = $screenResulation;
    
    $this->ramBusSpeed = $ramBusSpeed;
    $this->ramCapacity = $ramCapacity;
    $this->ramType = $ramType;

    $this->graphicsCardType = $graphicsCardType;
    $this->graphicsCardCapacity = $graphicsCardCapacity;
    $this->graphicsCardMemoryType = $graphicsCardMemoryType;
    
    $this->hddCapacity = $hddCapacity;
    $this->hddSpeed = $hddSpeed;
    $this->hddFormFactor = $hddFormFactor;

    $this->ssdCapacity = $ssdCapacity;
    $this->ssdFormFactor = $ssdFormFactor;
    $this->laptopModel = $laptopModel;
    $this->price = $price;
    $this->quantity = $quantity;
    $this->description = $description;
    $this->picture = $picture;

  }
}

?>