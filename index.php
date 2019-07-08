<?php
if(!empty($argv)) {
    $cidades = array('A', 'B', 'C', 'D');


    $cidadesConsole = str_split(strtoupper($argv[1]));
    $tamanhoRota = array_count_values($cidadesConsole);
    $validaLocais = count($cidadesConsole);
        if($validaLocais > 4){
            echo "Não existe este destino";
            echo "\r\n";
            exit;
        }
        foreach($tamanhoRota as $valrota => $value) {
            if ($value > 1) {
                echo "A rota digitada contém cidades repetidas";
                echo "\r\n";
                exit;
            }
        }
        if ($cidadesConsole[0] == $cidades[0] && $cidadesConsole[1] == $cidades[1]) {
            echo "cidades " . $cidades[0] . " para " . $cidades[1];
            echo "\r\n";
        }
        elseif($cidadesConsole[0] == $cidades[0]) {
            echo "cidades " . $city1;
            echo "\r\n";
        }
        elseif ($segundaRota == $city2 ) {
            echo "cidades " . $city2;
            echo "\r\n";
        }
        elseif ($terceiraRota == $city3) {
            echo "cidades " . $city3;
            echo "\r\n";
        }
        else {
            echo "Nenhuma das condiões";
            echo "\r\n";
        }
    }

//echo $cidades[2];
echo "\r\n";
//echo $primeraRota;
echo "\r\n";
var_dump($validaLocais);
echo "\r\n";


