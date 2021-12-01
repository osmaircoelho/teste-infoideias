<?php

class Seculo
{

    static function seculoAtual(Int $anoAtual): Int
    {
        $seculo = $anoAtual - 1;
        $seculo = $seculo / 100;
        $seculo = $seculo + 1;
        return  (Integer) $seculo;
    }
}

print  Seculo::seculoAtual('1905').PHP_EOL;
print  Seculo::seculoAtual('1700').PHP_EOL;
print  Seculo::seculoAtual('1800').PHP_EOL;
print  Seculo::seculoAtual('1900').PHP_EOL;;
print  Seculo::seculoAtual('2000');


