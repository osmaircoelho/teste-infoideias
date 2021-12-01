<?php

class FrequenciaNumero
{
    public function frequenciaNumeros($vetor){
        $cont = 1;
        $num = 0;
        $qtdNumeros = count($vetor);
        $repetidos = array($qtdNumeros);

        for( $i = 0; $i < $qtdNumeros; $i++ )
        {
            $cont=0;

            for($j=0; $j < $qtdNumeros; $j++)
            {
                if( $vetor[$j] === $vetor[$i] )
                {
                    $cont++;
                    $repetidos[$i] = $cont;
                    //$num = $vetor[$i];
                }
                $num = $vetor[$i];
            }

        }
        print_r($repetidos);

    }
}
$f = new FrequenciaNumero();
$f->frequenciaNumeros([2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]);
