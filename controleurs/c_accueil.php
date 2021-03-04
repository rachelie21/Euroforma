<?php
/**
 * Gestion de l'accueil
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

$estConnecte= estConnecte();

if ($estConnecte) {
    include 'vues/v_accueil.php'; 
    
} else {
    include 'vues/v_connexion.php';
}