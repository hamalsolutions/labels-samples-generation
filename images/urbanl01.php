<?php                     //      1          2      3        4          5         6        7      8   
    $correctos = array('QTY','DESCRIPTION','DEPT','CLASS','SUBCLASS','SEASON','DATE CODE','SKU','PRICE');
    require_once('../includes/html2.php');
    
    if (!isset($_GET['csvfile']) && !isset($_POST['selection']))
    {
            // Valores por default para presentar en el formato
        $DESCRIPTION = asignar(1,'Men U L Lion Wing Wht Tee');
        $DEPT = asignar(2,'04');
        $CLASS = asignar(3,'13');
        $SUBCLASS = asignar(4,'03');
        $SEASON = asignar(5,'27');
        $DATE = asignar(6,'F0');
        $SKU = asignar(7,'0403114');
        $PRICE = asignar(8,'$7.00');
                       
            // Creacion del formato
        formato(150,300,255,255,255);
        
            // Colores a usar
        $black = color(0,0,0);
        $white = color(255,255,255);
        
            // Fuentes a usar
        $arial = fuente('arial.ttf');
        $arialBold = fuente('arialbd.ttf');
        
        // Introducimos los datos
        cajaRellena(0,0,149,15,$black,$black);
        texto('MEN',0,13,1,0,$arialBold,$white,9.5,0,0);
        
        texto('DEPT   CLS    SUB    S',8,55,0,0,$arialBold,$black,9,0,0);
        texto($DEPT,0,70,3,102,$arial,$black,8.5,0,0);
        texto($CLASS,0,70,3,27,$arial,$black,8.5,0,0);
        texto($SUBCLASS,0,70,3,-50,$arial,$black,8.5,0,0);
        texto($SEASON,0,70,3,-113,$arial,$black,8.5,0,0);
        
        texto('URBAN LEGEND',8,90,0,0,$arial,$black,9.5,0,0);
        
        parrafo($DESCRIPTION,8,105,0,0,$arial,$black,8,0,25,10);
        
        texto('DTE',110,130,0,0,$arial,$black,10,0,0);
        texto($DATE,110,143,0,0,$arial,$black,10,0,0);
        
        texto($SKU,0,215,2,5,$arial,$black,9,0,0);
        
        texto($PRICE,0,272,1,0,$arial,$black,27,0,1);
        
        cajaRellena(0,284,149,15,$black,$black);
        texto('MEN',0,297,1,0,$arialBold,$white,9.5,0,0);
        
        
         // Creacion del Barcode
        barcode($SKU,6,157,1,45,'MSI');
        
        require_once('../includes/footer.php');
    }
?>