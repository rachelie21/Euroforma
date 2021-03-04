<?php
/**
 * Gestion de l'émargement
 *
 * PHP Version 7
 *
 * @category  Stage
 * @package   Euroforma
 * @author    Rachel Kott
 * @author    <kottrachel@gmail.com>
 * @author   Beth Sefer
 * @copyright 2020-2021
 */

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
if (!$action) {
    $action = 'saisirEmargement';
}

switch ($action) {
case 'saisirEmargement':
    $LesSeances = $pdo->getLesSeances();
    include 'vues/v_emargement.php';
    break;
case 'faireEmargement';
    $presence = filter_input(INPUT_POST, 'cocher', FILTER_DEFAULT, FILTER_FORCE_ARRAY);
    $motif = filter_input(INPUT_POST, 'idmotif', FILTER_DEFAULT, FILTER_FORCE_ARRAY);
    $nbrEleve = $pdo->countEleve();
    echo $nbrEleve;
    $presAbs = presence($presence, $nbrEleve);
    var_dump($presence);
    var_dump ($motif);
    $LesEleves = $pdo->getLesEleves();
    $req = $pdo->getEnregistrement();
    include 'vues/v_presence.php';
    break;
case 'voirEmargement';
    $idSeance = filter_input(INPUT_POST, 'idSeance', FILTER_SANITIZE_STRING);
    $ConsultEmarg = $pdo->getVoirEmargement($idSeance);
    $LesEleves = $pdo->getLesEleves();
    include 'vues/v_consulter.php';
    break;
default:
	include 'vues/v_accueil.php';
	break;
}