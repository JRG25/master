<?php

$numero = 20;

function primo($n) {
    $cont = 0;
    $res=0;
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $cont ++;
        }
    }
    if ($cont == 2) {
        $res = $n;
    }
    return $res;
}

for ($i = 0; $i <$numero ; $i++) {
    if (primo($i)) {
        echo "".$i."<br>";
    }
}
