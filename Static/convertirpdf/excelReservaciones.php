<?php 
include '../connect/db.php';

// Configurar las cabeceras para generar el archivo Excel
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="test.xls"');

echo "<h1>Consultar Reservaciones</h1>";
echo "<table border='1'>"; 
echo "<thead>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Hora de inicio</th>
            <th>Hora de fin</th>
        </tr>
      </thead>";

      $sql = "select * from reservaciones;";
      $exec = mysqli_query($con, $sql);
while ($rows = mysqli_fetch_array($exec)) {
    echo "<tr>
            <td>{$rows['id']}</td>
            <td>{$rows['fecha']}</td>
            <td>{$rows['horaIni']}</td>
            <td>{$rows['horaFin']}</td>
          </tr>";
}
echo "</table>";
?>