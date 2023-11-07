<?php
    include_once('../utils/functions.php');
    include_once('../utils/databaseConexion.php');

    $dbManager = new DataBaseConexion();

    print_r($argv);
    echo "Cantidad de parametros: $argc".PHP_EOL;

    $dbManager->setInactiveUsers($argv[1]);

    foreach ($argv as $key => $value) { 
        echo "Parametro $key: $value".PHP_EOL;
    }

?>