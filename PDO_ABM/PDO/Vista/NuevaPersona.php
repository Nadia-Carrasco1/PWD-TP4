<?php
$titulo = "Nueva persona";
?>

<div>
    <h3>Ingresar nueva persona</h3>
    <div>
        <form name="formPersona" id="formPersona" method="post" action="Accion/AccionNuevaPersona.php" enctype="multipart/form-data">
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
            <input type="number" name="Telefono" id="Telefono" required><br>
            <!---->
            <label for="Domicilio">Domicilio</label>
            <input type="text" name="Domicilio" id="Domicilio" required><br><br>

            <input type="submit" value="Aceptar">
        </form>
    </div>
<div>

 <?php
 /*Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos
 los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue
 un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se
 pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente.
 Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.*/
 ?>