<?php

require_once __DIR__ . "/Models/Production.php";
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/TvSerie.php";


// create instances from produt
$medias = [new Movie("jurassic park", "english", 7.9, "357,067,947", 122	), new Movie("E.T. - L'extra-terrestre", "english", 7.5, "619,000,000", 120), new TvSerie("better call saul", "english", 9, 1), new Movie("l buono, il brutto, il cattivo", "italiano, english, espanol", 8.8, "38,000,000", (120+42)), ];


header('Content-type: application/json');



// converted in json string
$medias_json = json_encode($medias);

// create file json
file_put_contents('medias.json', $medias_json);

// create output converted in json string

$medias_json_getted = file_get_contents('medias.json');

$medias_decoded = json_decode($medias_json_getted);

// set the "shape" of the response
$response = [
  "results" => $medias_decoded,
  "success" => true,
];

$medias_string = json_encode($response);

echo $medias_string;




