<?php

function sequenciaQuaseCrescente($arr) {
    for($i = 0; $i < count($arr) - 1; $i++) {
        if($arr[$i] >= $arr[$i + 1]) {
            $arr[$i + 1] = $arr[$i] + 1;
            if(!check($arr)) {
                return print "false".PHP_EOL;
            }
        }
    }
    return print "true".PHP_EOL;
}

function check($arr) {
    for($i = 0; $i < count($arr) - 1; $i++) {
        if($arr[$i] >= $arr[$i + 1]) {
            return print "false".PHP_EOL;
        }
    }
    return print "true".PHP_EOL;
}

sequenciaQuaseCrescente( [1, 3, 2, 1]); //false
sequenciaQuaseCrescente( [1, 3, 2] );  //true
sequenciaQuaseCrescente( [1, 2, 1, 2] );  //false
sequenciaQuaseCrescente( [3, 6, 5, 8, 10, 20, 15] ); //false
sequenciaQuaseCrescente( [1, 1, 2, 3, 4, 4] ); //false
sequenciaQuaseCrescente( [1, 4, 10, 4, 2] ); //false
sequenciaQuaseCrescente( [10, 1, 2, 3, 4, 5] ); //true
sequenciaQuaseCrescente( [1, 1, 1, 2, 3] ); //false
sequenciaQuaseCrescente( [0, -2, 5, 6] ); //true
sequenciaQuaseCrescente( [1, 2, 3, 4, 5, 3, 5, 6] ); //false
sequenciaQuaseCrescente( [40, 50, 60, 10, 20, 30] ); //false
sequenciaQuaseCrescente( [1, 1] ); //true
sequenciaQuaseCrescente( [1, 2, 5, 3, 5] );// true
sequenciaQuaseCrescente( [1, 2, 5, 5, 5] ); //false
sequenciaQuaseCrescente( [10, 1, 2, 3, 4, 5, 6, 1] ); //false
sequenciaQuaseCrescente( [1, 2, 3, 4, 3, 6] ); //true
sequenciaQuaseCrescente( [1, 2, 3, 4, 99, 5, 6] ); //true
sequenciaQuaseCrescente( [123, -17, -5, 1, 2, 3, 12, 43, 45] ); //true
sequenciaQuaseCrescente( [3, 5, 67, 98, 3] ); //true

