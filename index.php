<?php


require_once "vendor/autoload.php";


//use \Milon\Barcode\DNS1D;
//
//$d = new DNS1D();
//$d->setStorPath(__DIR__.'/cache/');
//echo $d->getBarcodeHTML('9780691147727', 'EAN13');

use \Milon\Barcode\DNS2D;

$d = new DNS2D();
$d->setStorPath(__DIR__.'/cache/');
echo $d->getBarcodeHTML('http://mms-it.com', 'QRCODE',10,10,"red");