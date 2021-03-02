<?php
/**
 * Gestion de l'émargement
 *
 * PHP Version 7
 *
 * @category  Stage
 * @package   Euroforma
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    Rachel Kott <kottrachel@gmail.com>
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Ecole de comptabilité Euroforma »
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
    $presence = filter_input(INPUT_POST, 'checkbox', FILTER_DEFAULT, FILTER_FORCE_ARRAY);
    $motif = filter_input(INPUT_POST, 'idmotif', FILTER_DEFAULT, FILTER_FORCE_ARRAY);
    var_dump($presence);
    var_dump ($motif);
    $LesEleves = $pdo->getLesEleves();
    $req = $pdo->getEnregistrement();
    include 'vues/v_presence.php';
    break;
default:
	include 'vues/v_accueil.php';
	break;
}