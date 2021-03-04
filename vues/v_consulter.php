<?php
/**
 * Vue Consulter l'émargement
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
<div class="row">
                <form role="form" method="post" 
                      action="index.php?uc=gereremargement&action=voirEmargement">
                    <div class="panel panel-info">
                        <div class="panel-heading">Consulter Emargement</div>
                        <table class="table table-bordered table-responsive">
        <tr>
             <th class="eleves">Elèves</th>
            <th class='presence'>Présence</th>
            <th class='motif'>Motif si absence</th>
        </tr>
        <?php
       foreach ($ConsultEmarg as $uneLigne) {
            $nom = $uneLigne['nom'];
            $prenom = $uneLigne['prenom'];
            $presence = $uneLigne['presence'];
            $motif = $uneLigne['motif'];
          
            ?>
        <tr>
                <td><?php echo $prenom.' '.$nom?></td>
                <td><?php echo $presence ?></td>
                <td><?php echo $motif ?></td>
                
                <?php
        }
                ?>
                    </td>
        </tr>
    </table>
                    </div>
                </form>
    
</div>