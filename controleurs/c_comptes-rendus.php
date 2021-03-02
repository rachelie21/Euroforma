<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
if (!$action) {
    $action = 'choisirEleveouFormateur';
}
switch ($action) {
    case 'choisirEleveouFormateur':
    $listeEleves=$pdo->getListeEleves();
         $listeFormateurs=$pdo->getListeFormateurs();
    case'afffichernbabsences':
       $idEleve = filter_input(INPUT_POST, 'lsteleve', FILTER_SANITIZE_STRING);
       echo $idEleve;
        $NbAbsences=$pdo->getNbAbsences($idEleve);
    $NbSeanceTotal=$pdo->getNbSeanceTotal();
    $PourcentageAbs= ($NbAbsences/$NbSeanceTotal)*100;
    
require_once($_SERVER['DOCUMENT_ROOT'].'/../include/include_path_inc.php');
require_once('Zend/Loader.php');

define('CM_PT', 1/0.0352778); // Conversion cm en points

Zend_Loader::loadClass('Zend_Pdf');
$pdf = new Zend_Pdf();

Zend_Loader::loadClass('Zend_Pdf_Page');
$page1 = new Zend_Pdf_Page(Zend_Pdf_Page::SIZE_A4);
$pdf->pages[] = $page1;

// Dessin d'un disque plein de 2 cm de rayon
// centre sur le point situe a 10 cm du bord gauche et a 22 cm du bas de la page
$page1->drawCircle(10*CM_PT, 22*CM_PT, 2*CM_PT);

$pdf->save(dirname(__FILE__).'/pdf_01_phpfacile.pdf');

             
        
    //$cleseleve = array_keys($listeEleves);
    include 'vues/v_comptes-rendus.php';
    break;
}
    

