<?php                    //    1      2      3
    $correctos = array('QTY','DEPT','STYLE','COLOR','SIZE','UPC');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $DEPT = asignar(1,'DEPT');
        $STYLE = asignar(2,'STYLE#');
        $COLOR = asignar(3,'COLOR');
        $SIZE = asignar(4,'SIZE');
        $UPC = asignar(5,'123456789012');
        
            // Creacion del formato
        formato(150,100,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
       
        // Introducimos los datos
        texto($DEPT,5,20,0,0,$arial,$black,6,0,0);
        
        texto($STYLE,40,20,0,0,$arial,$black,6,0,0);
        
        texto($COLOR,85,20,0,0,$arial,$black,6,0,0);
        
        texto($SIZE,0,20,2,5,$arial,$black,6,0,0);
        
        // Creacion del Barcode
        barcode($UPC,18,30,1,45,'UPC');
        
        barcodeTexto(2,-1,-2,5,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>
