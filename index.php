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

class Foods extends Products {
  public $pietanza;
  public $scadenza;
  public function __construct (string $_name, Category $_category, float $_price, int $_quantity, string $_pietanza, string $_scadenza) {
    parent::__construct ($_name, $_category, $_price, $_quantity);

    $this->pietanza = $_pietanza;
    $this->scadenza = $_scadenza;
  }
};

class Games extends Products {
  public $materiale;
  public function __construct (string $_name, Category $_category, float $_price, int $_quantity, string $_materiale) {
    parent::__construct ($_name, $_category, $_price, $_quantity);

    $this->materiale = $_materiale;
  }
};

class Houses extends Products {
  public $materiale;
  public $grandezza;
  public function __construct (string $_name, Category $_category, float $_price, int $_quantity, string $_materiale, string $_grandezza) {
    parent::__construct ($_name, $_category, $_price, $_quantity);

    $this->materiale = $_materiale;
    $this->grandezza = $_grandezza;
  }
};



$pallinaDiLana = new Games (
  "Palla di lana", 
  new Category (
  "GATTO"
  ),
  15.00,
  7,
  "lana",
);

$cucciaCane = new Houses (
  "Cuccia per cane",
  new Category (
    "Cane"
  ),
  70.99,
  3,
  "plastica",
  "30x20x70"
);

$cucciaGatto = new Houses (
  "Cuccia per gatti",
  new Category (
    "Gatto"
  ),
  92.40,
  5,
  "plastica, lana",
  "30x30x90"
);

$polloFinto = new Games (
  "Pollo finto con rumore",
  new Category (
    "Cane"
  ),
  7.99,
  32,
  "silicone"
);

var_dump($pallinaDiLana);
var_dump($cucciaCane);
var_dump($cucciaGatto);
var_dump($polloFinto);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP Extends</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row row-cols-3">
      <div class="col">
          <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title"><?= ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>