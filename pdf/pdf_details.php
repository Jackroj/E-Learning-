<?php
// include autoloader
require_once './dompdf_1-2-2/dompdf/autoload.inc.php';
    // reference the Dompdf namespace
use Dompdf\Dompdf;
session_start();
if(isset($_SESSION['user'])) {
    $name = $_SESSION['user'];
      } else{
          $name = 'No Name';
      }

// instantiate and use the dompdf class
$dompdf = new Dompdf();
ob_start();
require('./certificate.php');
$html = ob_get_contents();
ob_get_clean();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('E-Tutotial.pdf',['Attachment'=>false]);
    ?>