<?php

/**
* This page generates the PDF that contains the QR code and the access code.
* This printable document will allow people to access the relative emergency note in the future.
*/

// Include the session initializer
include_once 'PHP/internal_libraries/engine/starter.php';

// Load the environment variables needed for the process and set them as global
require_once '../underwear/environment_variables/configuration.php';
global $base_path,$current_note_version;

// Load the TCPDF library for generating the PDF
require 'PHP/external_libraries/TCPDF/tcpdf.php';

// Check if the encrypted note has been stored in the session
// and check if the user is coming from the done.php page
if (isset($_SESSION['encrypted_note'])
and isset($_SESSION["creation_date_time"])
and ($_SESSION["page_token"] == "done_page")) {

  // Extend the TCPDF class to create custom Header and Footer
  class WE_EXPIRE_PDF extends TCPDF {

    //Page header
    public function Header() {
      // Add WeExpire logo
      $image_file = 'img/logo.png';
      $this->Image($image_file, 16, 16, 40, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
    }

    // Page footer
    public function Footer() {
      // Keep the footer empty
    }
  }

  // Include the page language switch in order to provide translated content
  include_once 'PHP/internal_libraries/engine/page_language_switch.php';

  // Create new PDF document
  $pdf = new WE_EXPIRE_PDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

  // Set document information
  $pdf->SetCreator(PDF_CREATOR);
  $pdf->SetAuthor('WeExpire.org');
  $pdf->SetTitle('WeExpire.org note');
  $pdf->SetSubject($_SESSION["subject"]);

  // Set default header data
  $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 050', PDF_HEADER_STRING);

  // Set header and footer fonts
  $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
  $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

  // Set default monospaced font
  $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

  // Set margins
  $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
  $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
  $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

  // set auto page breaks
  $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

  // Set display mode
  $pdf->SetDisplayMode('fullpage', 'SinglePage', 'UseNone');
  
  // Set auto page breaks
  $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

  // Set image scale factor
  $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

  // Set font
  $pdf->SetFont('helvetica', '', 11);

  // Add a page
  $pdf->AddPage('L','A4');

  // Print HTML content
  $html = $translation["pdf_document"];

  // Print text using writeHTMLCell()
  $pdf->setCellPaddings(1, 5, 150, 0);
  $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

  // Set the style for the QR code
  $style = array(
    'border' => 0,
    'vpadding' => '0',
    'hpadding' => '0',
    'fgcolor' => array(0,0,0),
    'bgcolor' => false, //array(255,255,255)
    'module_width' => 1, // width of a single module in points
    'module_height' => 1 // height of a single module in points
  );

  // QRCODE,H : QR-CODE Best error correction
  // Include in the QR code the encrypted URL that allows the user to access the relative emergency note
  $pdf->write2DBarcode("{$base_path}/access.php?m={$_SESSION['encrypted_note']}&v={$current_note_version}", 'QRCODE', 180, 33, 100, 100, $style, 'N');

  $pdf->lastPage();

  // Close and output the PDF document
  $pdf->Output('WeExpire_document.pdf', 'I');

}

// If there is no encrypted note stored in the session and the user is not coming from the done.php page,
// then remove all the session variables, destroy the session and redirect to the index page
else {
  session_unset();
  session_destroy();
  header("Location: /");
  exit();
}

?>
