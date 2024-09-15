<?php 
$titulo="Buscar Auto";
include_once ( 'Estructura/Header.php');

?>
<div class="container d-flex justify-content-center">
    <div class="col-md-6">
        <div class="d-flex justify-content-center">
            <h3>Buscar Auto</h3>
        </div>
        <div class="d-flex justify-content-center">
            <form method="post" action="Accion/AccionBuscarAuto.php" enctype="multipart/form-data" id="formBuscarAuto" class="needs-validation" novalidate> 
                <label for ="Patente" class="form-label">Ingrese su patente: </label><br>
                <input id="Patente" class="Patente" name="Patente" type="text" class="form-control" required>
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Buscar" class="btn btn-success col-md-3">
                </div>
            </form>
        </div>
    </div>
</div>

<?php $src= "Estructura/JS/buscarAuto.js";
include_once 'Estructura/footer.php';
?>
