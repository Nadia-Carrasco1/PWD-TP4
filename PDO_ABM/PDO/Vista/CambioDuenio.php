<?php
$titulo = "Cambio de dueño";
include_once 'Estructura/Header.php';
 ?>

<div class="container">
    <div>
        <form name="formCambioDuenio" id="formCambioDuenio" method="post" action="Accion/AccionCambioDuenio.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <label class="form-label" for="Patente">Patente</label>
            <input type="text" name="Patente" id="Patente" placeholder="DKR 675" class="form-control" required><br>
            <!---->
            <label class="form-label" for="NroDni">DNI del nuevo due&ntilde;o</label>
            <input type="number" name="NroDni" id="NroDni" class="form-control" required><br><br>

            <input type="submit" value="Aceptar" class="btn">
        </form>
    </div>
</div>

<?php
$src = "Estructura/JS/CambioDuenio.js";
include_once 'Estructura/footer.php';
?>