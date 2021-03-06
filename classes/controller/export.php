<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Export extends Controller {

	public function action_pdf()
	{

		require_once(Kohana::find_file('vendor', 'tcpdf/config/lang/eng'));

		// create new PDF document
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, TRUE, 'UTF-8', FALSE);

		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Kohana::config('resume.author'));
		$pdf->SetTitle('Curriculum Vitae - Resume');
		$pdf->SetSubject(Kohana::config('resume.author').' - Curriculum Vitae - Resume');
		$pdf->SetKeywords(str_replace(" ", ", ", strtolower(Kohana::config('resume.author'))).', curriculum, vitae, resume, cv');

		// remove default header
		$pdf->setPrintHeader(FALSE);

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
		$this->response->body($pdf->Output(preg_replace('/\s+/', '', Kohana::config('resume.author')).'-CV.pdf', 'S'));

		//============================================================+
		// END OF FILE
		//============================================================+
	}
} // End Export