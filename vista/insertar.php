<?php
include("./header.php");
?>
<link rel="stylesheet" href="./css/insertar.css">
<h3>Ingresar Vehículos</h3>

  <form action="" method="$_POST">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Placa</label>
      <input type="text" class="form-control" name="placa" placeholder="PAX - 9621">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Marca</label>
      <input type="text" class="form-control" name="marca" placeholder="Chavrolet">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Modelo</label>
      <input type="text" class="form-control" name="modelo" placeholder="Sail">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Año</label>
      <input type="text" class="form-control" name="año" placeholder="2010">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Color</label>
      <input type="text" class="form-control" name="color" placeholder="Rojo">
    </div>

    <div class="container">
      <input class="btn btn-primary" type="button" value="Insertar">
    </div>
  </form>

<?php
include("./footer.php");
?>