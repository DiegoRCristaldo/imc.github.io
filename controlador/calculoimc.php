<?php
    if(isset($_GET['peso']) && isset($_GET['altura'])){ 
        $peso = $_GET['peso'];
        $altura = $_GET['altura'];
        
        function imc($peso, $altura){
            $imc = $peso / ($altura * $altura);
            return $imc;
        }

        if ($peso > 0 && $altura > 0) {
            $imc = imc($peso, $altura);
            $faixas = [
                ["min" => 0, "max" => 18.5, "rank" => "Magreza"],
                ["min" => 18.51, "max" => 24.99, "rank" => "Saudável"],
                ["min" => 25, "max" => 29.99, "rank" => "Sobrepeso"],
                ["min" => 30, "max" => 34.99, "rank" => "Obesidade Grau I"],
                ["min" => 35, "max" => 39.99, "rank" => "Obesidade Grau II"],
                ["min" => 40, "max" => PHP_FLOAT_MAX, "rank" => "Obesidade Grau III"]
            ];
        
            foreach($faixas as $faixa){
                $imc = round($imc, 2);
                if($imc >= $faixa["min"] && $imc <= $faixa["max"]){
                    if($imc <= 18.5 || $imc >= 30){
                        echo "<p class='vermelho'>Atenção, seu IMC é $imc, e você está classificado com {$faixa["rank"]}<p>";
                        require_once('visao/rodape.php');
                        return;    
                    }
                    elseif($imc >= 25 && $imc <= 29.99){
                        echo "<p class='laranja'>Atenção, seu IMC é $imc, e você está classificado com {$faixa["rank"]}<p>";
                        require_once('visao/rodape.php');
                        return;
                    }
                    else{
                        echo "<p>Atenção, seu IMC é $imc, e você está classificado com {$faixa["rank"]}<p>";
                        require_once('visao/rodape.php');
                        return;
                    }
                }
            }
        }
        else{
            echo "<p class='vermelho'>Peso e altura devem ser números positivos.</p>";
        }
    }
?>