<?php
/**
 * Vue accueil
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
<div id="accueil" style="text-align: center">
    <h2>
        Accueil<small> - Bonjour 
            <?php 
            echo ' '.$_SESSION['nom'].'!';
            ?></small>
    </h2>

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <a href="index.php?uc=gereremargement&action=saisirEmargement"
                           class="btn btn-primary btn-lg" role="button">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <br>Emargement</a>
                        <a href="index.php?uc=comptes-rendus&action=choisirEleveouFormateur"
                           class="btn btn-primary btn-lg" role="button">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <br>Comptes-rendus</a>
                        <a href="index.php?uc=Formulaires administratifs&action=selectionnerForms"
                           class="btn btn-primary btn-lg" role="button">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <br>Formulaires administratifs</a>
                      
                    </div>
                </div>
            </div>
