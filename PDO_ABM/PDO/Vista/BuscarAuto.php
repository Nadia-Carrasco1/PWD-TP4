<?php 
$titulo="Buscar Auto";
include_once ( 'Estructura/Header.php');

?>
<div>
<div>
    <form method="post" action="Accion/AccionBuscarAuto.php" enctype="multipart/form-data" id="formBuscarAuto">
        <label for ="Patente">Ingrese su patente: </label><br>
        <input id="Patente" class="Patente" name="Patente" type="text" required>
        <input type="submit" value="Buscar">
    </form>
</div>
<div>

<?php $src= "Estructura/JS/buscarAuto.js";
include_once 'Estructura/footer.php';
?>
