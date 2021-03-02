<?php
/**
 * Index du projet GSB
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   Euroforma
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */
//require erreur fatale include ca s arrete pas le programme
require_once 'includes/fct.inc.php';//FICHIER INTEGRE et fct c est des fonctions sans requetes sql
require_once 'includes/class.PdoEuroforma.inc.php';//classe pdogsb fonction avec requetes sql
session_start();//METHODE UNE SEESION C EST UNE SUPERGLOBALE UNE variable qui contient toutes les variables 
$pdo = PdoEuroforma::getPdoEuroforma();//Variableqd y a un §juste avant les :c est un racourci d ecriture qui veut dire une classe ici
$estConnecte = estConnecte();
require 'vues/v_entete.php';//require ca lance et si ca marche pas erreur fatale le programme s arrete
$uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_STRING);//filter input verifier le contenu de la variable uc
if ($uc && !$estConnecte) {//si uc a recu un resultat 
    $uc = 'connexion';
} elseif (empty($uc)) {//si vide 
    $uc = 'accueil';
}
switch ($uc) {
case 'connexion':
    include 'controleurs/c_connexion.php';
    break;
case 'accueil':
    include 'controleurs/c_accueil.php';
    break;
case 'gereremargement':
    include 'controleurs/c_emargement.php';
    break;
case 'comptes-rendus':
    include 'controleurs/c_comptes-rendus.php';
    break;
case 'formulaires administratifs':
    include 'controleurs/c_formulaires-administratifs.php';
    break;
case 'deconnexion':
    include 'controleurs/c_deconnexion.php';
    break;
}
require 'vues/v_pied.php';
