
<?php

//Iterates through the array to sort it alphabetically by key, then goes again and prints each country with its capital

function printCountryWithCapital (&$countryArray) {
    ksort($countryArray);

    foreach($countryArray as $country => $capital) {
        echo "The capital of " . $country . " is " . $capital;
        echo "<br>";
      }

}

function getAverageFromArray($numberArray) {
    $average = array_sum($numberArray)/count($numberArray);
    echo "The average temperature is " . round($average, 2);
    echo "<br>";
}

function getLowestHighestNumberInArray ($top, $bottom, $numberArray) {
    sort($numberArray);
    $numberArray = array_unique($numberArray);
    $bottomNumbers = array_slice($numberArray, count($numberArray)-$bottom, count($numberArray) );
    $topNumbers = array_slice($numberArray, 0, $top);
    echo "List of " . $top . " highest temperatures are " . implode(", ", $topNumbers);
    echo "<br>";
    echo "List of " . $bottom . " lowest temperatures are " . implode(", ", $bottomNumbers);
}
