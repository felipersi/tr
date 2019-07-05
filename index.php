<?php
if(isset($argv)) {
    foreach ($argv as $arg) {
        $primeraRota = $arg[0];
        $segundaRota = $arg[1];
        $terceiraRota = $arg[2];

        if ($primeraRota == 'A' && $segundaRota == 'B' && $terceiraRota == 'C') {
            echo "A rota começou em A passa por B e terimna em C e a Distancia é 5";
            echo "\r\n";


        } elseif ($primeraRota == 'B') {

            echo "ROTA 2";
            echo "\r\n";

        }
    }

}

echo $primeraRota;