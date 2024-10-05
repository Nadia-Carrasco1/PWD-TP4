<?php
$link = "";
$linkMenu = "../";
$titulo="Nuevo Auto";
include_once '../Estructura/Header.php';
?>

<div class="container d-flex justify-content-center">
    <div class="col-md-6"><br>
            <div class="d-flex justify-content-center">
                <h3> Ingresar nuevo auto</h3>
            </div>
        
        <div class="d-flex justify-content-center">
            <form name="formAuto" id="formAuto" method="post" action="Accion/AccionNuevoAuto.php" enctype="multipart/form-data" class="needs-validation" novalidate>
                <label for="Patente" class="form-label text-muted">Patente</label>
                <input type="text" name="Patente" id="Patente" class="form-control" required><br>
                
                <label for="Marca" class="form-label text-muted">Marca</label>
                <input type="text" name="Marca" id="Marca" class="form-control" required><br>

                <label for="Modelo" class="form-label text-muted">Modelo</label>
                <input type="number" name="Modelo" id="Modelo" class="form-control" required><br>

                <label for="DniDuenio" class="form-label text-muted">DNI del titular</label>
                <input type="number" name="DniDuenio" id="DniDuenio" class="form-control" required><br><br>
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Aceptar" class="btn btn-success col-md-5">
                </div>
            </form>
        </div><br>
    </div>    

</div>

<?php 
$src="../JS/nuevoAuto.js";
include_once '../Estructura/footer.php';
?>