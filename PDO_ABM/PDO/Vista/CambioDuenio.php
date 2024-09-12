<?php
$titulo = "Cambio de dueño";

/* Ejercicio 6 – Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el
 numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados
 a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente
 ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
 cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
 antes generada, no se puede acceder directamente a las clases del ORM.*/

 ?>

<div>
    <div>
        <form name="formCambioDuenio" id="formCambioDuenio" method="post" action="Accion/AccionCambioDuenio.php" enctype="multipart/form-data">
            <label for="Patente">Patente</label>
            <input type="text" name="Patente" id="Patente" required><br>
            <!---->
            <label for="NroDni">DNI</label>
            <input type="number" name="NroDni" id="NroDni" required><br><br>

            <input type="submit" value="Aceptar">
        </form>
    </div>
</div>