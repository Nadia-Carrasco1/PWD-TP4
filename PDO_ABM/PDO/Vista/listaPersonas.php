<?php
/*Ejercicio 3 – Crear una página "listaPersonas.php" que muestre un listado con las personas que se
 encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
 los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
 generada, no se puede acceder directamente a las clases del ORM.*/

include_once '../configuracion.php';
$titulo = "Lista personas";

$objPersona = new ABM_Persona();
$paramPersonas = "";
$todasLasPersonas = $objPersona->buscar($paramPersonas);

?>

<table border="1">
    <tr>
        <th>DNI</th>
        <th>Apellido</th>
        <th>Nombre</th>
        <th>Fecha de nacimiento</th>
        <th>Teléfono</th>
        <th>Domicilio</th>
    </tr>
    <tr>
        <?php
        foreach($todasLasPersonas as $unaPersona) {
            echo "<tr>";
            echo "<td>" . $unaPersona->getNroDni();
            echo "<td>" . $unaPersona->getApellido();
            echo "<td>" . $unaPersona->getNombre();
            echo "<td>" . $unaPersona->getFechaNac();
            echo "<td>" . $unaPersona->getTelefono();
            echo "<td>" . $unaPersona->getDomicilio();
            echo "</tr>";
        }
        ?>
    </tr>
</table>

<a href="autosPersona.php">Ver autos</a>




