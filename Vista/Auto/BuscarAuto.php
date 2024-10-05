<?php
$link = "";
$linkMenu = "../";
$titulo="Buscar Auto";

include_once ( '../Estructura/Header.php');

?>
<div class="container d-flex justify-content-center">
    <div class="col-md-6"><br>
        <div class="d-flex justify-content-center">
            <h3>Buscar Auto</h3>
        </div>
        <div class="d-flex justify-content-center">
            <form method="post" action="Accion/AccionBuscarAuto.php" enctype="multipart/form-data" id="formBuscarAuto" name="formBuscarAuto" class="needs-validation" novalidate> 
                <label for ="Patente" class="form-label text-muted">Ingrese su patente: </label><br>
                <input id="Patente" name="Patente"  placeholder="DKR 675" type="text" class="form-control" required><br><br>
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Buscar" class="btn btn-success col-md-5">
                </div><br>
            </form>
        </div>
    </div>
</div>

<?php $src= "../JS/buscarAuto.js";
include_once '../Estructura/footer.php';
?>
