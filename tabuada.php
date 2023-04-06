<?php

for ($numero = 1; $numero <= 10; $numero++) {
    echo"TABUADA DO $numero".PHP_EOL.PHP_EOL;
    for ($i = 1; $i <= 10; $i++) {  
        echo "$i X $numero = ". $i * $numero . PHP_EOL;
    }
    echo PHP_EOL.PHP_EOL.PHP_EOL;
}
