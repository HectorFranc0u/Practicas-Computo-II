<?php

interface Ivolante{
    public function girar();
}

interface Ipito{
    public function pitar();
}

//implementacion de interfaces

class Coche implements Ivolante, Ipito{
    public function girar(){
        return "giro a la derecha";
    }

    public function pitar(){
        return "Bip Bip";
    }
}

$coche = new Coche();
echo $coche->girar();
echo $coche->pitar();