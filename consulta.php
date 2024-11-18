<?php  include 'includes/header.php'?>
<?php  include 'Static/connect/db.php'?>

<style>
    *{
        color: white;
    }
</style>

<a href="Static/convertirpdf/excel.php">
    <img src="Static/img/excel.png" alt="">
</a>

<a href="Static/convertirpdf/reporte.php">
    <img src="Static/img/pdf.png" alt="">
</a>

<table  class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Servicio</th>
            <th>Costo</th>
            <th>Duración</th>
        </tr>
    </thead>
    <?php
        $sql = "select * from servicios";
        $exec = mysqli_query($con, $sql);
        while($rows = mysqli_fetch_array($exec)){
        ?>
            <tr>
                <th><?php echo $rows['idS']; ?></th>
                <th><?php echo $rows['nombre']; ?></th>
                <th><?php echo $rows['precio']; ?></th>
                <th><?php echo $rows['duracion']; ?></th>
            </tr>            
        <?php
        }
    ?>
</table>


<?php  include 'includes/footer.php'; ?>