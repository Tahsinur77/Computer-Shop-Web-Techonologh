<?php

	
class User{

  public $userId;
  public $userType;
  public $name;
  public $email;
  public $phoneNumber;
  public $gender;
  public $dateOfBirth;
  public $address;
  public $picture;
  public $password;

  function __construct($userId,$userType,$name,$email,$phoneNumber,$gender,$dateOfBirth,$address,$picture,$password){
    $this->userId = $userId;
    $this->userType = $userType;
    $this->name = $name;
    $this->email = $email;
    $this->phoneNumber = $phoneNumber;
    $this->gender = $gender;
    $this->dateOfBirth = $dateOfBirth;
    $this->address = $address;
    $this->picture = $picture;
    $this->password = $password;
  }




}


?>