<?php

require_once "vendor/autoload.php";

$mpdf = new \Mpdf\Mpdf();

//// Write some HTML code:
//$mpdf->WriteHTML('<h1>Hello World</h1>');
//$mpdf->WriteHTML('<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque magnam repudiandae voluptatibus? Autem ducimus, exercitationem explicabo inventore ipsam laudantium, magnam necessitatibus nihil non obcaecati pariatur possimus, quo tenetur vero voluptatem!</p>');
//$mpdf->WriteHTML('<a href="https://google.com">To Google</a>');
$html = file_get_contents("format-pdf.php");
$mpdf->WriteHTML($html);
// Output a PDF file directly to the browser
$mpdf->Output("public/my-pdf.pdf");