<?php
$titulo="Nuevo Auto";
include_once 'Estructura/Header.php';
?>

<div>
    <h3> Ingresar nuevo auto</h3>
    <div>
        <form name="formAuto" id="formAuto" method="post" action="Accion/AccionNuevoAuto.php" enctype="multipart/form-data">
            <label for="Patente">Patente</label>
            <input type="text" name="Patente" id="Patente" required><br>
            
            <label for="Marca">Marca</label>
            <input type="text" name="Marca" id="Marca" required><br>

            <label for="Modelo">Modelo</label>
            <input type="number" name="Modelo" id="Modelo" required><br>

            <label for="DniDuenio">DNI del titular</label>
            <input type="text" name="DniDuenio" id="DniDuenio" required><br><br>

            <input type="submit" value="Aceptar">
        </form>

    </div>    

</div>

<?php 
$src="Estructura/JS/nuevoAuto.js";
include_once 'Estructura/footer.php';
?>