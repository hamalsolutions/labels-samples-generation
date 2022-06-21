<?php //   1       2      3      4      5
$correctos = array('QTY', 'STYLE', 'COLOR', 'SIZE', 'UPC', 'PRICE');
require_once('../includes/html2.php');

if (!isset($_GET['csvfile']) && !isset($_POST['selection'])) {
	// Valores por default para presentar en el formato
	$STYLE = asignar(1, '40010743358');
	$COLOR = asignar(2, 'SLIME/PURP');
	$SIZE = asignar(3, 'ONE SIZE');
	$UPC = asignar(4, '697146534881');
	$PRICE = asignar(5, '150.00');

	// Creacion del formato
	formato(150, 325, 255, 255, 255);
	agujero(75, 25);
	// Colores a usar
	$black = color(0, 0, 0);

	// Fuentes a usar
	$arial = fuente('arial.ttf');
	$arialBold = fuente('arialbd.ttf');
	$arial70 = fuente('Arial_70.ttf');
	$arialNarrow = fuente('arialn.ttf');
	$logo = fuente('EPC_Logo.ttf');

	// Introducimos los datos
	texto('E', 112, 30, 0, 0, $logo, $black, 22, 0, 0);

	if (strlen($STYLE) < 14) {
		texto($STYLE, 8, 84, 0, 0, $arialNarrow, $black, 8.5, 0, 0);
	} else {
		texto($STYLE, 8, 84, 0, 0, $arial70, $black, 8.5, 0, 0);
	}

	if (strlen($STYLE) < 14) {
		texto($COLOR, 0, 84, 2, 8, $arialNarrow, $black, 8.5, 0, 0);
	} else {
		texto($COLOR, 0, 84, 2, 8, $arial70, $black, 8.5, 0, 0);
	}

	texto($SIZE, 0, 200, 1, 0, $arialBold, $black, 12, 0, 0);

	if (strlen($PRICE) <> 0) {
		texto('MSRP   $' . sinSigno($PRICE), 0, 315, 1, 0, $arialBold, $black, 11, 0, 0);
	}

	// Creacion del Barcode
	barcode($UPC, 18, 100, 1, 52, 'UPC');
	barcodeTexto(2, 0, 0, 7, 'arial.ttf');

	require_once('../includes/footer.php');
}
?>
