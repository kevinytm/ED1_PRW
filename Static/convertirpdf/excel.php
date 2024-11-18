<?php 
include '../connect/db.php';

// Configurar las cabeceras para generar el archivo Excel
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="test.xls"');

echo "<h1>Consultar servicios y Precios</h1>";
echo "<table border='1'>"; // Usa <table border="1"> para asegurar compatibilidad
echo "<thead>
        <tr>
            <th>ID</th>
            <th>Servicio</th>
            <th>Costo</th>
            <th>Duración</th>
        </tr>
      </thead>";

$sql = "SELECT * FROM servicios";
$exec = mysqli_query($con, $sql);
while ($rows = mysqli_fetch_array($exec)) {
    echo "<tr>
            <td>{$rows['idS']}</td>
            <td>{$rows['nombre']}</td>
            <td>{$rows['precio']}</td>
            <td>{$rows['duracion']}</td>
          </tr>";
}
echo "</table>";
?>






