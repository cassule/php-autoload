<?php

/* Classe implementada no arquivo InterfaceImplents */

interface Veiculo {

    public function acelerar($velocidade);
    public function travar($velocidade);
    public function trocarMarcha($marcha);
    
}

abstract class Automovel implements Veiculo {

    public function acelerar ($velocidade)
    {
        echo "O acarro acelerou " . $velocidade . " km/h";
    }

    public function travar ($velocidade)
    {
        echo "O acarro travou " . $velocidade . " km/h";
    }

    public function trocarMarcha ($marcha)
    {
        echo "O acarro foi para marcha " . $marcha;
    }

}


?>