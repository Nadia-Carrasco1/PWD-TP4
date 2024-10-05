<?php
$link = "";
$linkMenu = "../";
$titulo = "Nueva persona";
include_once '../Estructura/Header.php';
?>

<div class="container d-flex justify-content-center">
    <div class="col-md-5">
        <br>
        <div class="d-flex justify-content-center">
            <h3>Ingresar nueva persona</h3>
        </div>
        <div>
            <form name="formPersona" id="formPersona" method="post" action="Accion/AccionNuevaPersona.php" enctype="multipart/form-data" class="needs-validation" novalidate>
                <label class="form-label text-muted" for="NroDni">DNI</label>
                <input type="number" name="NroDni" id="NroDni" class="form-control" required><br>
                <!---->
                <label class="form-label text-muted" for="Apellido">Apellido</label>
                <input type="text" name="Apellido" id="Apellido" class="form-control" required><br>
                <!---->
                <label class="form-label text-muted" for="Nombre">Nombre</label>
                <input type="text" name="Nombre" id="Nombre" class="form-control" required><br>
                <!---->
                <label class="form-label text-muted" for="fechaNac">Fecha de nacimiento</label>
                <input type="date" name="fechaNac" id="fechaNac" class="form-control" required><br>
                <!---->
                <label class="form-label text-muted" for="Telefono">Telefono</label>
                <input type="text" name="Telefono" id="Telefono" placeholder="299-5632419" class="form-control" required><br>
                <!---->
                <label class="form-label text-muted" for="Domicilio">Domicilio</label>
                <input type="text" name="Domicilio" id="Domicilio" class="form-control" required><br><br>

                <div class="d-flex justify-content-center">
                    <input type="submit" value="Aceptar" class="btn btn-success col-md-5">
                </div>
                <br>
            </form>
        </div>
    </div>
</div>

<?php
$src = "../JS/NuevaPersona.js";
include_once '../Estructura/footer.php';
?>