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

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" type="text" href="style.css">

  <title>Workshop 5</title>
</head>
<body>
  <div class="country_list">
    <?php
      printCountryWithCapital($ceu);
    ?>
    
</body>
</html>
