<?php
$link = "";
$linkMenu = "../";
$titulo = "Cambio de dueño";
include_once '../Estructura/Header.php';
 ?>

<div class="container d-flex justify-content-center">
    <div class="col-md-5">
        <br>
        <div class="d-flex justify-content-center">
            <h3>Cambio de due&ntilde;o</h3>
        </div>
        <div>
            <form name="formCambioDuenio" id="formCambioDuenio" method="post" action="Accion/AccionCambioDuenio.php" enctype="multipart/form-data" class="needs-validation" novalidate>
                <label class="form-label text-muted" for="Patente">Patente</label>
                <input type="text" name="Patente" id="Patente" placeholder="DKR 675" class="form-control" required><br>
                <!---->
                <label class="form-label text-muted" for="NroDni">DNI del nuevo due&ntilde;o</label>
                <input type="number" name="NroDni" id="NroDni" class="form-control" required><br><br>
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Aceptar" class="btn btn-success col-md-3">
                </div>
                <br>
            </form>
        </div>
    </div>  
</div>

<?php
$src = "../JS/CambioDuenio.js";
include_once '../Estructura/footer.php';
?>