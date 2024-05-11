<?php
require_once __DIR__ . "/Production.php";

class Movie extends Production
{
  public $profits;
  public $length;
  protected $currency = "$";
  protected $length_measure_unity = "min";

  public function __construct($_title, $_language, $_vote, $_profits, $_length)
  {
    parent:: __construct($_title, $_language, $_vote);
    $this -> profits = $_profits;
    $this -> length = $_length;
  }

  public function getFullProfits(){
    return $this -> profits . $this -> currency;
  }

  public function getFullLength(){
    return $this -> length . $this -> length_measure_unity;
  }
};