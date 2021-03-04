<?php
/*
 * Fonctions pour l'application GSB
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

/**
 * Teste si un quelconque utilisateurteur est connecté
 *
 * @return vrai ou faux
 */
function estConnecte()
{
    return isset($_SESSION['nom']);
}
/**
 * Enregistre dans une variable session les infos d'un visiteur
 *
 * @param String $id ID du visiteur
 * @param String $nom        Nom du visiteur
 * @param String $prenom     Prénom du visiteur
 *
 * @return null
 */
function connecter( $nom)
{
    $_SESSION['nom'] = $nom;
}

/**
 * Détruit la session active
 *
 * @return null
 */
function deconnecter()
{
    session_destroy();
}
/**
 * Ajoute le libellé d'une erreur au tableau des erreurs
 *
 * @param String $msg Libellé de l'erreur
 *
 * @return null
 */
function ajouterErreur($msg)
{
    if (!isset($_REQUEST['erreurs'])) {
        $_REQUEST['erreurs'] = array();
    }
    $_REQUEST['erreurs'][] = $msg;
}
/**
 * Retoune le nombre de lignes du tableau des erreurs
 *
 * @return Integer le nombre d'erreurs
 */
function nbErreurs()
{
    if (!isset($_REQUEST['erreurs'])) {
        return 0;
    } else {
        return count($_REQUEST['erreurs']);
    }
}

function presence($presence, $nbrEleve)
{
    $tab=array();
    for ($i = 0; $i<$nbrEleve; $i++) {
        $tab[$i] = 'NON';
    }
    foreach ($presence as $unePresence){
            $tab[$unePresence-1]='OUI';
    }
    return $tab;
}