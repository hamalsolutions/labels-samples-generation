<?php                      //  1       2       3        4        5      6
    $correctos = array('QTY','STYLE','DEPT','CLASS','SUBCLASS','UPC','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
             // Valores por default para presentar en el formato
        $STYLE = asignar(1,'4RN91081KC');
        $DEPT = asignar(2,'059');
        $CLASS = asignar(3,'10');
        $SUB = asignar(4,'13');
        $UPC = asignar(5,'704386281298');
        $PRICE = asignar(6,'18.00');
                
            // Creacion del formato
        formato(150,150,255,255,255);
        setAsSticker(10);
        
            // Colores a usar
        $black = color(0,0,0);
        
               // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        texto('KOHL\'S',10,20,0,0,$arialBold,$black,10,0,0);
        texto('Kohls.com',10,35,0,0,$arial,$black,8,0,0);
        
        texto($DEPT,0,20,3,-20,$arial,$black,9,0,0);
        
        texto($CLASS,0,20,3,-75,$arial,$black,9,0,0);
        
        texto($SUB,0,20,3,-120,$arial,$black,9,0,0);
        
        texto($STYLE,0,35,2,3,$arial,$black,8,0,0);
        
        texto(formatizarTexto('1   23456  78901   2',$UPC),0,120,1,0,$arialBold,$black,9,0,0);
        
        texto($PRICE,0,142,2,15,$arialBold,$black,9,0,1);
        
                
        // Creacion del Barcode
        barcode($UPC,18,50,1,55,'UPC');
        
        require_once('../includes/footer.php');
    }
?>