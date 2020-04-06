<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php

require_once __DIR__ . '/vendor/autoload.php';

//Grab Variable
$fname = 'test';

// Create new PDF instance L set fir landscape page
// $mpdf = new \Mpdf\Mpdf();
$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);

$mpdf->Image('picture/logo-petronas.png', 0, 0, 210, 297, 'png', '', true, false);

$mpdf->use_kwt = true; 

// Create PDF
$data = '';

$data .= '<center><h3><u>VESSEL HSE INSPECTION REPORT</u></h3></center><br />';

// Add Data in PDF
$data .= '<table class="table"><tr><th align="center">VESSEL DETAILS</th></tr></table><br />';
$data .= ' 
<div class="container" style="page-break-inside: avoid;">
<div class="row">
    <div class="col-sm-6">
        <p>Vessel Name    :   MEO MONARCH 2</p>
    </div>
    <div class="col-sm-6">
        <p>Contract  :   RFD OFFSHORE</p>
    </div>
</div></div>';
// Write PDF
$mpdf->WriteHTML($data);

// Output at browser
$mpdf->Output('myfile.pdf','D');

?>