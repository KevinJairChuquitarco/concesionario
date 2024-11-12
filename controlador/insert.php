<?php
    require_once("../modelo/database.php");

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $placa = $_POST['placa'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $año = $_POST['año'];
        $color = $_POST['color'];


        $query = "INSERT INTO vehiculo(placa, marca, modelo, año, color) VALUES (:placa,:marca,:modelo,:año,:color)";
        
    }
?>