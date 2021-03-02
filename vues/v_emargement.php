<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Vue Connexion
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */

?>
<div class="row">
                <form role="form" method="post" 
                      action="index.php?uc=gereremargement&action=saisirEmargement">
                    <div class="panel panel-info">
                        <div class="panel-heading">Séances</div>
                        <table class="table table-bordered table-responsive">
        <tr>
            <th class="id">ID</th>
            <th class="date">Date</th>
            <th class='formateur'>Formateur</th>
            <th class='matiere'>Matière</th>
            <th class='epreuve'>Epreuve</th>
            <th class='duree'>Durée</th>  
            <th class='creneau'>Créneau</th>  
            <th class='idEmargement'>Emargement</th>  
        </tr>
        <?php
        foreach ($LesSeances as $uneSeance) {
            $id = $uneSeance['id'];
            $date = $uneSeance['date'];
            $formateur = $uneSeance['formateur'];
            $matiere = $uneSeance['matiere'];
            $epreuve = $uneSeance['epreuve'];
            $duree = $uneSeance['duree'];
            $heureDeb = $uneSeance['heureDeb'];
            $heureFin = $uneSeance['heureFin'];
            $emarge = $uneSeance['emarge'];
            $Bouton = $pdo->getEmargementFait($id);

            ?>
        <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $date ?></td>
                <td><?php echo $formateur ?></td>
                <td><?php echo $matiere ?></td>
                <td><?php echo $epreuve ?></td>
                <td><?php echo $duree ?></td>
                <td><?php echo $heureDeb.'-'.$heureFin ?></td>
                <td><?php if ($Bouton[$id-1]['emarge']== 'OUI')  {  ?>
                    <a href="index.php?uc=gereremargement&action=saisirEmargement"
                           class="btn btn-primary" role="button">Consulter</a>
                <?php } else { ?>
                    <a href="index.php?uc=gereremargement&action=faireEmargement"
                           class="btn btn-primary" role="button">Faire</a>
                
                <?php
        }
                ?>
                    </td>
        </tr>
        <?php
                }
        ?>
    </table>
                    </div>
                </form>
    
</div>