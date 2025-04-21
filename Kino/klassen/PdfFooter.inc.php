<?php

class PdfFooter extends setasign\Fpdi\Tcpdf\Fpdi
	{
		public function Footer()
		{
			$this->SetXY(-20, -12);
			$this->SetTextColor(255, 0, 255);
			$this->SetFont('Helvetica', '', 9);
			$pageNumber = $this->PageNo();
			$footerText = "Seite $pageNumber";
			$this->Cell(10, 3, $footerText, 0, 0, 'R');
		}
	}

?>