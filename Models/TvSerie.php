<?php

require_once __DIR__ . "/Production.php";

class TvSerie extends Production{
  public $season_number;
  public function __construct($_title, $_language, $_vote, $_season_number)
  {
    parent:: __construct($_title, $_language, $_vote);
    $this -> season_number = $_season_number;
  }

  // setter
  public function setSeason_number($_season_number){
    $this -> season_number = $_season_number;
  }
}