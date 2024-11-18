<?php
	include 'plantillaReservaciones.php';
	include "../connect/db.php";

    $sql = "select * from reservaciones;";
	$resultado= mysqli_query($con, $sql);
	$pdf = new PDF('P','mm','letter');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	?>

	<?php
		$pdf->Cell(47.5,4,'ID',1,0,'C',true);
		$pdf->Cell(47.5,4,'FECHA',1,0,'C',true);
		$pdf->Cell(47.5,4,'HORA INICIO',1,0,'C',true);	
        $pdf->Cell(47.5,4,'HORA FIN',1,0,'C',true);	       
	?>

	<?php			   
	$pdf->SetFont('Arial','',12);
	while($row = mysqli_fetch_array($resultado))
	{
		         $pdf->Ln(4);
				 $pdf->Cell(47.5,4,$row['id'],1,0,'C');				 
				 $pdf->Cell(47.5,4,$row['fecha'],1,0,'C');			
		         $pdf->Cell(47.5,4,$row['horaIni'],1,0,'C');	
                 $pdf->Cell(47.5,4,$row['horaFin'],1,0,'C');			
	}				
	$pdf->Output();
?>