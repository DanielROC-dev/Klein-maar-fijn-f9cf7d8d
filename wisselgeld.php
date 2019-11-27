<?php

$values = array(
    array(50 ,20 ,10 ,5 ,2 ,1 ),
    array(0.50 ,0.20 ,0.10 ,0.05, 0.02, 0.01)
);

$input = $argv[1];
$inputRounded = round($input, 2);
echo $inputRounded;
if(!$inputRounded == 0) {
    foreach($values[0] as $values[0] => $numbers){
        $amountOfx = floor($inputRounded / $numbers);
        if(!$amountOfx == 0) {
            echo "> $amountOfx x " . $numbers . PHP_EOL;
            $minus = $amountOfx * $numbers;
            $inputRounded = $inputRounded - $minus;
        }
    }
    foreach($values[1] as $values[1] => $numbers){
        $amountOfx = floor($inputRounded / $numbers);
        if(!$amountOfx == 0) {
            echo "> $amountOfx x " . $numbers . PHP_EOL;
            $minus = $amountOfx * $numbers;
            $inputRounded = $inputRounded - $minus;
        }
    
    }
    $inputRounded2 = round($inputRounded, 2);
    if(!$inputRounded2 == 0){
        echo "> " . ($inputRounded2 * 100) . " x " . $numbers;
    }    
} else {
    exit("> geen wisselgeld.");
}

//floor rekent naar beneden dus je kan vanaf hoog naar beneden werken met de command en dan gewoon het er weer aftrekken
//foreach
