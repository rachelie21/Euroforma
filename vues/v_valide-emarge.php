<?php
/**
 * Vue valide l'émargement fait
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
valide-emarge();
?>
<div class="alert alert-info" role="alert">
    <p>L'émargement a bien été effectué <a href="index.php">Cliquez ici</a>
        pour revenir à la page d'accueil</p>
</div>
<?php
header("Refresh: 3;URL=index.php");
