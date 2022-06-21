<?php                       //     1          2       3      4      5
    $correctos = array('QTY','DESCRIPTION','STYLE','COLOR','UPC','SIZE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
        // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'merry catmass');
        $STYLE = asignar(2,'15095');
        $COLOR = asignar(3,'BLACK');
        $UPC = asignar(4,'001234567895');
        $SIZE = asignar(5,'SMALL');
        
        // Creacion del formato
        formato(200,200,255,255,255);
        setAsSticker(10);
        
        // Colores a usar
        $black = color(0,0,0);
        
        // Fuentes a usar
        $arialBold = fuente('arialbd.ttf');
        $arialNarrowBold = fuente('arialnb.ttf');
        // Introducimos los datos

        texto($DESCRIPTION,15,30,0,0,$arialNarrowBold,$black,9,0,0);

        texto($STYLE,15,55,0,0,$arialNarrowBold,$black,11,0,0);
                
        texto($COLOR,0,55,2,15,$arialNarrowBold,$black,11,0,0);
        
        texto('Size: '.$SIZE,0,175,1,0,$arialBold,$black,9,0,0);
        
        // Creacion del Barcode
        barcode($UPC,20,50,1.3,78,'UPC');
        
        barcodeTexto(2,-1,-2,6,'arial.ttf');
        
        require_once('../includes/footer.php');
    }
?>