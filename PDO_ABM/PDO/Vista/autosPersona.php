<?php
$titulo = "Ingresar DNI";
include_once 'Estructura/Header.php';
?>

<div class="container">
    <div>
        <form name="formDni" id="formDni" method="post" action="Accion/AccionAutosPersona.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <label class="form-label" for="NroDni">Ingrese el n&uacute;mero DNI</label>
            <input type="number" name="NroDni" id="NroDni" class="form-control" required>
            
            <input type="submit" value="Enviar" class="btn">
        </form>
    </div>
<div>

<?php
$src = "Estructura/JS/autosPersona.js";
include_once 'Estructura/footer.php';
?>