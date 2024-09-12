<?php
$titulo = "Ingresar DNI";
?>

<div>
    <div>
        <form name="formDni" id="formDni" method="post" action="Accion/AccionAutosPersona.php" enctype="multipart/form-data">
            <label for="NroDni">Ingrese el n&uacute;mero DNI</label>
            <input type="number" name="NroDni" id="NroDni" required>
            <input type="submit" value="Enviar">
        </form>
    </div>
<div>

<?php
?>