<?php

class Products {
  public $name;
  public $category;
  public $price;
  public $quantity;

  public function __construct (string $_name, Category $_category, float $_price, int $_quantity) {
    $this->name = $_name;
    $this->category = $_category;
    $this->setPrice($_price);
    $this->quantity = $_quantity;
  }

  public function setPrice ($_price) {
    return $this -> price = round($_price, 2);
  }
};

class Category {
  public $type;

  public function __construct (string $_type) {
    $this->setType($_type);
  }

  public function setType ($_type) {
    $_type = strtolower($_type);
    if ($_type == "" && $_type != "cane" && $_type != "gatto") return false;

    return $this -> type = $_type;;
  }
};


$prova = new Products (
  "ciao", 
  new Category (
  "GATTO"
  ),
  15.00,
  7
);

var_dump($prova);
?>