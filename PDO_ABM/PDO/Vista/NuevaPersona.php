<?php
$titulo = "Nueva persona";
?>

<div>
    <h3>Ingresar nueva persona</h3>
    <div>
        <form name="formPersona" id="formPersona" method="post" action="Accion/AccionNuevaPersona.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <label for="NroDni">DNI</label>
            <input type="number" name="NroDni" id="NroDni" required><br>
            <!---->
            <label for="Apellido">Apellido</label>
            <input type="text" name="Apellido" id="Apellido" required><br>
            <!---->
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" required><br>
            <!---->
            <label for="fechaNac">Fecha de nacimiento</label>
            <input type="date" name="fechaNac" id="fechaNac" required><br>
            <!---->
            <label for="Telefono">Telefono</label>
            <input type="text" name="Telefono" id="Telefono" placeholder="299-5632419" required><br>
            <!---->
            <label for="Domicilio">Domicilio</label>
            <input type="text" name="Domicilio" id="Domicilio" required><br><br>

            <input type="submit" value="Aceptar">
        </form>
    </div>
<div>

<?php
$src = "Estructura/JS/NuevaPersona.js";
include_once 'Estructura/footer.php';
?>