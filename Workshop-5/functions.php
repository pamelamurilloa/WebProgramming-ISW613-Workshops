
<?php

//Iterates through the array to sort it alphabetically by key, then goes again and prints each country with its capital

function printCountryWithCapital (&$countryArray) {
    ksort($countryArray);

    foreach($countryArray as $country => $capital) {
        echo "The capital of " . $country . " is " . $capital;
        echo "<br>";
      }

}