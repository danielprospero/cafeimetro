<?php
include ("pdf.php");

$o_arquivo = "relatorio-consumo.pdf";
$html = '<link href="css/bootstrap/bootstrap.css" rel="stylesheet" />';
$html .= '<link href="css/cafeimetro.css" rel="stylesheet" />';
$html .= $_POST['esconde_html'];

$pdf = new Pdf();
$pdf->load_html($html);
$pdf->render();
$pdf->stream($o_arquivo, array("Attachment" => false));