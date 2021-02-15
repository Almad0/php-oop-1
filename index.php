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
  public function getType(){
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

// var_dump($instruments);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php OOP 1</title>
  </head>
  <style media="screen">
    body{
      background-color: lightgreen;
    }
    .container{
      width: 80%;
      height: 100vh;
      margin: auto;
      display: flex;
      justify-content: space-around;
      align-items: center;
    }
    .card{
      padding: 10px;
      border: 2px solid blue;
      background-color: #23d4af;
      box-shadow: 2px 2px blue;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
    }
  </style>

    <div class="container">
      <?php foreach ($instruments as $value): ?>
        <div class="card">
          <h2><?php echo ($value -> getName()) ?></h2>
          <p>Tipo: <?php echo ($value -> getType()) ?></p>
          <p>Marca: <?php echo ($value -> getBrand()) ?></p>
          <p>Prezzo: <?php echo ($value -> getAveragePrice()) ?> euro.</p>
        </div>
      <?php endforeach; ?>
    </div>
  </body>
</html>




















<!-- fine -->
