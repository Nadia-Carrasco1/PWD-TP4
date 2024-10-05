<?php
$link = "";
$linkMenu = "../";
$titulo = "Ingresar DNI";
include_once '../Estructura/Header.php';
?>

<div class="container d-flex justify-content-center">
    <div class="col-md-5">
        <br>
        <div class="d-flex justify-content-center">
            <h3>Ver autos</h3>
        </div>
        <div>
            <form name="formDni" id="formDni" method="post" action="Accion/AccionAutosPersona.php" enctype="multipart/form-data" class="needs-validation" novalidate>
                <label class="form-label text-muted" for="NroDni">Ingrese el n&uacute;mero DNI</label>
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
$src = "../JS/autosPersona.js";
include_once '../Estructura/footer.php';
?>