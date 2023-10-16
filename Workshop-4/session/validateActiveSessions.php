<?php
    require('../utils/functions.php');

    print_r($argv);
    echo "Cantidad de parametros: $argc".PHP_EOL;

    echo $argv[1];
    setInactiveUsers($argv[1]);

    foreach ($argv as $key => $value) { 
        echo "Parametro $key: $value".PHP_EOL;
    }

?>