<?php
class Desktop{

  public $name;
  public $model;
  public $keyFeatures;
  public $productId;
  public $brand;
  public $processorType;
  public $clockSpeed;
  public $noOfCore;
  public $noOfThread;
  public $ramBrand;
  public $ramBusSpeed;
  public $ramCapacity;
  public $ramType;
  public $casingBrand;
  public $casingType;
  public $powerSupplyBrand;
  public $powerSupplyWattage;
  public $motherboardBrand;
  public $motherboardFormFactor;
  public $graphicsCardBrand;
  public $graphicsCardCapacity;
  public $graphicsCardMemoryType;
  public $hddBrand;
  public $hddCapacity;
  public $hddSpeed;
  public $hddFormFactor;
  public $ssdBrand;
  public $ssdCapacity;
  public $ssdFormFactor;
  public $coolerBrand;
  public $coolerType;
  public $price;
  public $quantity;
  public $description;
  public $picture;

  function __construct($name,$model,$keyFeatures,$productId,$brand,$processorType,$clockSpeed,$noOfCore,$noOfThread,$ramBrand,$ramBusSpeed,$ramCapacity,$ramType,$casingBrand,$casingType,$powerSupplyBrand,$powerSupplyWattage,$motherboardBrand,$motherboardFormFactor,$graphicsCardBrand,$graphicsCardCapacity,$graphicsCardMemoryType,$hddBrand,$hddCapacity,$hddSpeed,$hddFormFactor,$ssdBrand,$ssdCapacity,$ssdFormFactor,$coolerBrand,$coolerType,$price,$quantity,$description,$picture){
    $this->name = $name;
    $this->model = $model;
    $this->keyFeatures = $keyFeatures;
    $this->productId = $productId;
    $this->brand = $brand;
    $this->processorType = $processorType;
    $this->clockSpeed = $clockSpeed;
    $this->noOfCore = $noOfCore;
    $this->noOfThread = $noOfThread;
    $this->ramBrand = $ramBrand;
    $this->ramBusSpeed = $ramBusSpeed;
    $this->ramCapacity = $ramCapacity;
    $this->ramType = $ramType;
    $this->casingBrand = $casingBrand;
    $this->casingType = $casingType;
    $this->powerSupplyBrand = $powerSupplyBrand;
    $this->powerSupplyWattage = $powerSupplyWattage;
    $this->motherboardBrand = $motherboardBrand;
    $this->motherboardFormFactor = $motherboardFormFactor;
    $this->graphicsCardBrand = $graphicsCardBrand;
    $this->graphicsCardCapacity = $graphicsCardCapacity;
    $this->graphicsCardMemoryType = $graphicsCardMemoryType;
    $this->hddBrand = $hddBrand;
    $this->hddCapacity = $hddCapacity;
    $this->hddSpeed = $hddSpeed;
    $this->hddFormFactor = $hddFormFactor;
    $this->ssdBrand = $ssdBrand;
    $this->ssdCapacity = $ssdCapacity;
    $this->ssdFormFactor = $ssdFormFactor;
    $this->coolerBrand = $coolerBrand;
    $this->coolerType = $coolerType;
    $this->price = $price;
    $this->quantity = $quantity;
    $this->description = $description;
    $this->picture = $picture;

  }
}
?>