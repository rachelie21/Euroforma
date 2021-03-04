<?php
/**
 * Vue entête
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
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">
        <title>Euroforma</title> 
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./styles/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="./styles/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <?php
            $uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_STRING);
            if ($estConnecte) {
                ?>
            <div class="header">
                <div class="row vertical-align">
                    <div class="col-md-4">
                        <h1>
                            <img src="./images/logo.png" class="img-responsive" 
                                 alt="L'école de comptabilité" 
                                 title="euroforma">
                        </h1>
                    </div>
                    <div class="col-md-8">
                        <ul class="nav nav-pills pull-right" role="tablist">
                            <li <?php if (!$uc || $uc == 'accueil') { ?>class="active" <?php } ?>>
                                <a href="index.php">
                                    <span class="glyphicon glyphicon-home"></span>
                                    Accueil
                                </a>
                            </li>
                            <li <?php if ($uc == 'emargement') { ?>class="active"<?php } ?>>
                                <a href="index.php?uc=gereremargement&action=saisirEmargement">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                   Emargement
                                </a>
                            </li>
                            <li <?php if ($uc == 'Compte-rendus') { ?>class="active"<?php } ?>>
                                <a href="index.php?uc=Compte-rendus&action=choirEleveouFormateur">
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Comptes-rendus
                                </a>
                            </li>
                            <li <?php if ($uc == 'Formulaires administratif') { ?>class="active"<?php } ?>>
                                <a href="index.php?uc=Formulaires administratifs&action=selectionnerForms">
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                   Formulaires administratifs
                                   </a>
                            </li>
                            <li 
                            <?php if ($uc == 'deconnexion') { ?>class="active"<?php } ?>>
                                <a href="index.php?uc=deconnexion&action=demandeDeconnexion">
                                    <span class="glyphicon glyphicon-log-out"></span>
                                    Déconnexion
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
            } else {
                ?>   
                <h1>
                    <img src="./images/logo.png"
                         class="img-responsive center-block"
                         alt="L'école de comptabilité"
                         title="Euroforma">
                </h1>
                <?php
            }
