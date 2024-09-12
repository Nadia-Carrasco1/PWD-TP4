<?php 
$tituloPagina="Buscar Auto";
//include_once()  aca poner direccion del encabezado

?>




<form method="post" action="Accion/AccionBuscarAuto.php" enctype="multipart/form-data" id="formBuscarAuto">
    <label>Ingrese su patente: </label><br>
    <input id="Patente" class="Patente" name="Patente" type="text" required>
    <input type="submit" value="Buscar">
</form>

