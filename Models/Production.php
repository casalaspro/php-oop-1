<?php

class Production{

  // ATTRIBUTES
  public string $title;
  public string $language;
  public float $vote;

  // METHODS

  public function firstLetterCapitalize(string $string) : string
  {
    return ucwords($string, " \t\r\n\f\v'");
  }

  // setter
  public function setVote(float $_vote) : string
  {
    if(1 <= $_vote && $_vote <= 10){
      $this -> vote = $_vote;
      return '';
    }else{
      //var_dump("Incorrect value!");
      return 'Incorrect value';
    }
  }

  public function trimString(string $_string) : string
  {
    return trim($_string);
  }

  //getter
  public function getTitle() : string
  {
    return $this -> title;
  }

  public function getLanguage() : string
  {
    return $this -> language;
  }

  public function getVote() : float
  {
    return $this -> vote;
  }

  // CONSTRUCTOR
  function __construct($_title, $_language, $_vote){
    $this -> title = $this -> firstLetterCapitalize($_title);
    $this -> language = $this -> trimString($_language);
    $this -> setVote($_vote);

  }

}
?>