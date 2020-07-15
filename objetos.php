<?php

class Arbol{

public $CantidadHojas;
public $Tipo;
public $Antigüedad;
public $Altura;

function Crecer(){
    $Altura="5 metros";
    echo $Altura;
}

function crearHojas(){
    $CantidadHojas="120 hojas";
    echo $CantidadHojas;
} 

function fotosintesis(){
    $Tipo="Pino";
    $Antigüedad="1 año";
    echo $Tipo,$Antigüedad;
}
}

$a1 = new Arbol();
echo "el nuevo arbol tiene: <br>";
$a1->Crecer();
echo "<br>con: <br>";
$a1->crearHojas();
echo "<br>y es de tipo: <br>";
$a1->fotosintesis();
echo "<br>";

class Humano{
public $nombre= "luis";
public $altura="masculino";
public $genero="25 años";
public $edad="1.61 mt.";
public $carácter="tranquilo";

public function hablar(){
    echo "<br>hola mi nombre es: $this->nombre, tengo una edad de:$this->edad, una altura de $this->altura, y de genero $this->genero, con un caracter $this->carácter";
}
function correr(){
    echo "<br>Corro 10 km al dia";
}
function comer(){
    echo "<br>Me encanta la pizza";
}    
}
$h = new Humano();
echo "<br>Nuevo Humano<br>";
$h->hablar();
$h->correr();
$h->comer();

?>