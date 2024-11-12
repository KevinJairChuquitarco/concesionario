<?php
class Vehiculo
{
    //atributos
    private $placa;
    private $marca;
    private $modelo;
    private $año;
    private $color;

    //Getters obtener
    public function getPlaca()
    {
        return $this->placa;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getAño()
    {
        return $this->año;
    }

    public function getColor()
    {
        return $this->color;
    }

    //setters asisgnar

    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setAño($año)
    {
        $this->año = $año;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function mostrarDetalles()
    {
        echo "Placa: " . $this->getPlaca() . "<br>";
        echo "Marca: " . $this->getMarca() . "<br>";
        echo "Modelo: " . $this->getModelo() . "<br>";
        echo "Año: " . $this->getAño() . "<br>";
        echo "Color: " . $this->getColor() . "<br>";
        echo "Años de vida: " . $this->calcularAños() . "<br>";
    }
    public function calcularAños()
    {
        $AñoActual = date("Y");
        return $AñoActual - $this->getAño();
    }
}

$vehiculo = new Vehiculo();
$vehiculo->setPlaca("PAC-856");
$vehiculo->setMarca("Chevrolet");
$vehiculo->setModelo("Sail");
$vehiculo->setAño(2014);
$vehiculo->setColor("negro");
$vehiculo->mostrarDetalles();
$vehiculo->calcularAños();
