<?php
$usuario = "root";
$contrasena ="";
$servidor = "localhost";
$basededatos = "integradora";
$conexion = mysqli_connect($servidor, $usuario, "") or die ("No se ha podido conectar al servidor de Base datos");
$db = mysqli_select_db ( $conexion,$basededatos) or die ( "Upp! No se a podido conectra a la base de datos");
$consulta = "SELECT * FROM equipo";
$resultado = mysqli_query($conexion, $consulta) or die ( "Algo ha ido mal en la consulta de la base datos");
echo "<table borde='2'>";
echo "<tr>";
echo "<th>";
echo "<th>ID_Equipo</th>";
echo "<th>Nombre</th>";
echo "<th>Precio</th>";
while ($columna = mysqli_fetch_array($resultado))
{
    echo "<tr>";
    echo "<td>" . $columna['ID_Equipo'] . "</td><td>" . $columna['Nombre'] . "</td><td>" . $columna['Precio'] . "</td>";
    echo "</table>";
}
mysqli_close($conexion);
?>