<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * index.php
 *
 * @since       2015-02-21
 * @category    Library
 * @package     PdfParser
 * @author      Nicola Asuni <info@tecnick.com>
 * @copyright   2011-2016 Nicola Asuni - Tecnick.com LTD
 * @license     http://www.gnu.org/copyleft/lesser.html GNU-LGPL v3 (see LICENSE.TXT)
 * @link        https://github.com/tecnickcom/tc-lib-color
 *
 * This file is part of tc-lib-pdf-parser software library.
 */
echo "Hej";
// autoloader when using Composer
require ('../tc-lib-pdf-parser/Process/RawObject.php');
require ('../tc-lib-pdf-parser/Process/XrefStream.php');
require ('../tc-lib-pdf-parser/Process/Xref.php');
require ('../tc-lib-pdf-parser/Exception.php');
require ('../tc-lib-pdf-parser/Parser.php');
echo "Hej";

// autoloader when using RPM or DEB package installation
//require ('/usr/share/php/Com/Tecnick/Pdf/Parser/autoload.php');

$filename = '../nmra/appendix_a_s-9.2.2_0.pdf';
$rawdata = file_get_contents($filename);
if ($rawdata === false) {
    die('Unable to get the content of the file: '.$filename);
}
// configuration parameters for parser
$cfg = array('ignore_filter_errors' => true);

// parse PDF data
$pdf = new \Com\Tecnick\Pdf\Parser\Parser($cfg);
$data = $pdf->parse($rawdata);

// display data
var_dump($data);

/*


define('FPDF_FONTPATH', '../fpdf181/font');
require('../fpdf181/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Cell(40,20,'Daniel!');
$pdf->Output();
*/
?>