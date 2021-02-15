<?php

/** Strumenti Musicali /**
 * @author Almado Almado@gmail.com
 * @copyright 2021 Almado
 */

class MusicalInstrument{

  public $name;
  public $type;
  public $brand;
  public $orchestra;
  public $averagePrice;

  function __construct(string $name, string $type, string $brand, bool $orchestra, float $averagePrice)
  {
    $this -> name = $name;
    $this -> type = $type;
    $this -> brand = $brand;
    $this -> orchestra = $orchestra;
    $this -> averagePrice = $averagePrice;
  }

  public function setName(string $name){
      $this -> name = $name;
  }
  public function setType(string $type){
      $this -> type = $type;
  }
  public function setBrand(string $brand){
      $this -> brand = $brand;
  }
  public function setOrchestra(bool $orchestra){
      $this -> orchestra = $orchestra;
  }
  public function setAveragePrice(float $averagePrice){
      $this -> averagePrice = $averagePrice;
  }

  public function getName(){
      return $this -> name;
  }
  public function gettype(){
      return $this -> type;
  }
  public function getBrand(){
      return $this -> brand;
  }
  public function getOrchestra(){
      return $this -> orchestra;
  }
  public function getAveragePrice(){
      return $this -> averagePrice;
  }
}

// $pianoforte = new MusicalInstrument ("Piano CDP/100", "corda", "Yamaha", 1, 789.99);
// $chitarra = new MusicalInstrument ("JS140M", "corda", "Ibanez", 0, 849.59);
// $flauto = new MusicalInstrument ("RB70043", "fiato", "Roy Benson", 1, 749.99);
// $bongo = new MusicalInstrument ("Double NT33", "percussione", "Carlson", 1, 199.99);
// $kazoo = new MusicalInstrument ("KZ2", "fiato", "Amazon", 0, 10);

$instruments = [
  "pianoforte" => new MusicalInstrument ("Piano CDP/100", "corda", "Yamaha", 1, 789.99),
  "chitarra" => new MusicalInstrument ("JS140M", "corda", "Ibanez", 0, 849.59),
  "flauto" => new MusicalInstrument ("RB70043", "fiato", "Roy Benson", 1, 749.99),
  "bongo" => new MusicalInstrument ("Double NT33", "percussione", "Carlson", 1, 199.99),
  "kazoo" => new MusicalInstrument ("KZ2", "fiato", "Amazon", 0, 10)
];

var_dump($instruments);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php OOP 1</title>
  </head>

  <body>
    <div class="container">
      <div class="card">
        
      </div>
    </div>
  </body>
</html>




















<!-- fine -->
