<?php
/**
 * Gestion de l'accueil
 *
 * PHP Version 7
 *
 * @category  STAGES
 * @package   Euroforma
 * @author    TsivyaSuissa <tsivyasuissa@gmail.com>
 * @copyright 2020 Euroforma
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */

if ($estConnecte) {
    include 'vues/v_accueil.php'; 
    
} else {
    include 'vues/v_connexion.php';
}