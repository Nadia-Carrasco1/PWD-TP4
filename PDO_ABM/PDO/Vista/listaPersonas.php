<?php
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




