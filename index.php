<?php
if(isset($argv)) {
    $cidades = array('A', 'B', 'C', 'D');

//$validaLetras = count($cidades);
//if($validaLetras > 4 or $validaLetras < 1){
//echo "\r\n";
//echo "cidades incorretas";
//echo "\r\n";
//}
    foreach ($argv as $arg) {

        $primeraRota = substr($arg, 0);
        $segundaRota = substr($arg, 1);
        $terceiraRota = substr($arg, 2);

        if ($primeraRota == $cidades[0]) {
            echo "cidades " . $cidades[0];
            echo "\r\n";
            break;
        }
        elseif ($segundaRota !=  ) {
            echo "cidades ". $cidades[1];
            echo "\r\n";
            break;
        }
        elseif ($terceiraRota = $cidades[2]) {
            echo "cidades ". $cidades[2];
            echo "\r\n";
            break;
        }
        else {
            echo "Nenhuma das condiões";
            echo "\r\n";
            break;
        }
    }
}

echo $cidades[2];
echo "\r\n";
