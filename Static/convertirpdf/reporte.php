<?php
	include 'plantilla.php';
	include "../connect/db.php";
	$query = "SELECT idS, nombre, precio FROM servicios;"; 
	$resultado= mysqli_query($con,$query);
	$pdf = new PDF('P','mm','letter');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	?>

	<?php
		$pdf->Cell(65,4,'ID',1,0,'C',true);
		$pdf->Cell(65,4,'NOMBRE',1,0,'C',true);
		$pdf->Cell(65,4,'PRECIO',1,0,'C',true);	     
	?>

	<?php			   
	$pdf->SetFont('Arial','',12);
	while($row = mysqli_fetch_array($resultado))
	{
		         $pdf->Ln(4);
				 $pdf->Cell(65,4,$row['idS'],1,0,'C');				 
				 $pdf->Cell(65,4,$row['nombre'],1,0,'C');			
		         $pdf->Cell(65,4,$row['precio'],1,0,'C');				
	}				
	$pdf->Output();
?>