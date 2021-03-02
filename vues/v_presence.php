<?php
/**
 * Vue Presence
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    Rachel Kott <kottrachel@gmail.com>
 * @copyright 2021 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */
?>
<div class="row">
                <form role="form" method="post" 
                      action="index.php?uc=gereremargement&action=faireEmargement">
                    <h1>Emargement :</h1>
                    <div class="panel panel-info">
                        <table class="table table-bordered table-responsive">
        <tr>
            <th class="eleves">Elèves</th>
            <th class='presence'>Présence</th>
            <th class='motif'>Motif si absence</th>
        </tr>
        <?php
        foreach ($LesEleves as $unEleve) {
            $nom = $unEleve['nom'];
            $prenom = $unEleve['prenom'];
            $idEleve = $unEleve['idEleve'];
          
            ?>
        <tr>
                <td><?php echo $prenom.' '.$nom?></td>
                <td><input type ="checkbox" checked="checked" name="cocher[]" value="<?php echo $idEleve?>"></td>
                <td><input type = "text" class="form-control" name="idmotif[]" size="38 px" id="idmotif"></td>
                </tr>
                <input type="hidden" name="idEleve[]" value=""<?php echo $idEleve?>">
                    <?php
        }
        ?>
        
    </table>
                    </div> 
                    <input id="ok" type="submit" value="Valider" class="btn btn-success" 
                   role="button">
                </form>
    
</div>