<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Export extends Controller {

	public function action_pdf()
	{

		require_once(Kohana::find_file('vendor', 'tcpdf/config/lang/eng'));

		// create new PDF document
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Gabriel Reitz Giannattasio');
		$pdf->SetTitle('Curriculum Vitae - Resume');
		$pdf->SetSubject('Gabriel Reitz Giannattasio - Curriculum Vitae - Resume');
		$pdf->SetKeywords('gabriel, reitz, giannattasio, curriculum, vitae, resume, cv');

		// remove default header
		$pdf->setPrintHeader(false);

		// set footer font
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		//set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		//set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		//set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		//set some language-dependent strings
		$pdf->setLanguageArray($l);

		// ---------------------------------------------------------

		// set font
		$pdf->SetFont('helvetica', '', 10);

		// add a page
		$pdf->AddPage();

		// set some text to print
		$html = Request::factory("printable")->execute()->body();

		// output the HTML content
		$pdf->writeHTML($html, TRUE, FALSE, TRUE, FALSE, '');

		// ---------------------------------------------------------

		// Close and output PDF document
		// This method has several options, check the source code documentation for more information.
		$this->response->headers("Content-Type", "application/pdf");
		$this->response->body($pdf->Output('resume.pdf', 'S'));

		//============================================================+
		// END OF FILE
		//============================================================+
	}
} // End Export