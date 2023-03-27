<?php

// APARTADO DE PERSONA
  abstract class Persona{
    public string $DNI;
    public string $nombre;
    public string $pape;
  }

  class Propietario extends Persona{
    public string $Direccion;
  }

  class Cliente extends Persona{
    public string $Telefono;
    // lista de vehiculos
  }

// APARTADO DE VEHICULO
  abstract class Vehiculo{
    public string $matricula;
    public string $marca;
    public string $modelo;
  }

  class coche extends Vehiculo{
    public int $anchura;
    public int $altura;

  }

  class moto extends Vehiculo{
    public bool $limitador;
  }


?>
