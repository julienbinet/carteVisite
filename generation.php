<?php
ob_start();
include(dirname(__FILE__).'/upload.php');


/*
    Upload du fond de la carte ainsi que la photo / logo
    et récupération des chemins relatifs
*/

if($_POST['fond'] == 'fondP'){
    $fond = "./uploads/".upload($_FILES['fondPerso']);
}else{
   $fond =  "./img/".$_POST['fond'];
}

if($_POST['photo'] == 'oui'){
    $image = "./uploads/".upload($_FILES['avatar']);
}else{
 $image="";
}


/* 
        Choix du template en fonction des options concernant le format 
        ainsi que la présence d'une photo ou non
*/

$photo = ($_POST['photo'] == "oui") ? "-photo" : "" ;

if($_POST['format'] == "format1"){
    include(dirname(__FILE__).'/templates/format-x8'.$photo.'.php');
    $format = "P";
}else{
    include(dirname(__FILE__).'/templates/format-x4'.$photo.'.php');
    $format = "L";
}

$content = ob_get_clean();


/*  Création du fichier pdf     */

   require_once(dirname(__FILE__).'/html2pdf/vendor/autoload.php');
    try
    {
        $html2pdf = new HTML2PDF($format, 'A4', 'fr');

        $html2pdf->setDefaultFont($_POST['police']);
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('exemple00.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

