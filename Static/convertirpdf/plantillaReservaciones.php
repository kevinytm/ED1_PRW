<?php
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
        function Header()
        {
            $this->Image('images/logo.jpg', 10, 5, 15); 
            $this->SetFont('Arial', 'B', 24);

            $this->SetXY(50, 15); 

            $this->Cell(120, 10, 'Reservaciones de la barberia', 0, 0, 'C');
            $this->Ln(20);
        }
        
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>