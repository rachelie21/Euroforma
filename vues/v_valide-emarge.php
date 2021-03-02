<?php
/**
 * Vue Déconnexion
 *
 * PHP Version 7
 *
 * @category  Stage
 * @package   Euroforma
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Ecole de comptabilité Euroforma »
 */
valide-emarge();
?>
<div class="alert alert-info" role="alert">
    <p>L'émargement a bien été effectué <a href="index.php">Cliquez ici</a>
        pour revenir à la page d'accueil</p>
</div>
<?php
header("Refresh: 3;URL=index.php");
