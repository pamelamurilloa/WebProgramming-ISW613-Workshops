<?php

require_once("functions.php");

$ceu = array( 
  "Italy"=>"Rome", 
  "Luxembourg"=>"Luxembourg", 
  "Belgium"=> "Brussels", 
  "Denmark"=>"Copenhagen", 
  "Finland"=>"Helsinki", 
  "France" => "Paris", 
  "Slovakia"=>"Bratislava", 
  "Slovenia"=>"Ljubljana", 
  "Germany" => "Berlin", 
  "Greece" => "Athens", 
  "Ireland"=>"Dublin", 
  "Netherlands"=>"Amsterdam", 
  "Portugal"=>"Lisbon", 
  "Spain"=>"Madrid", 
  "Sweden"=>"Stockholm", 
  "United Kingdom"=>"London", 
  "Cyprus"=>"Nicosia", 
  "Lithuania"=>"Vilnius", 
  "Czech Republic"=>"Prague", 
  "Estonia"=>"Tallin", 
  "Hungary"=>"Budapest", 
  "Latvia"=>"Riga", 
  "Malta"=>"Valetta", 
  "Austria" => "Vienna", 
  "Poland"=>"Warsaw"
) ;

$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Workshop 5</title>
</head>
<body>
  <div class="container" >
    <div class="country_list">
      <?php
        printCountryWithCapital($ceu);
      ?>
    </div>
    <div class="temperatures">
      <?php
        getAverageFromArray($temperatures);
        getLowestHighestNumberInArray(5, 5, $temperatures);
      ?>
    </div>
  </div>
</body>
</html>
