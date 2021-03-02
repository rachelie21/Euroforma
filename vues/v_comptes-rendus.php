<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h2>Comptes-rendus</h2>
<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <form action="index.php?uc=comptes-rendus&action=Heuresdepresence" 
              method="post" role="form">
            <div class="form-group">
                <label for="lsteleve" accesskey="n">Selectionner un élève : </label>
                <select id="lsteleve" name="lsteleve" class="form-control">
                    <?php
                    foreach ($listeEleves as $uneListe) {
                        $id = $uneListe['id'];
                        $nom = $uneListe['nom'];
                        $prenom = $uneListe['prenom'];
                        
                            ?>
                            <option value="<?php echo $id?>">
                                <?php echo $prenom . ' ' . $nom ?> </option>
                            <?php
                        }
                    
                    ?>    

                </select>
            </div>
            <input id="ok" type="submit" value="Valider" class="btn btn-success" 
                   role="button">
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <form action="index.php?uc=comptes-rendus&action=Heuresenseignement" 
              method="post" role="form">
            <div class="form-group">
                <label for="lstformateur" accesskey="n">Selectionner un formateur: </label>
                <select id="lstformateur" name="lstformateur" class="form-control">
                    <?php
                    foreach ($listeFormateurs as $uneListe) {
                        $id = $uneListe['id'];
                        $nom = $uneListe['nom'];
                        $prenom = $uneListe['prenom'];
                        
                            ?>
                            <option value="<?php echo $id?>">
                                <?php echo $prenom . ' ' . $nom ?> </option>
                            <?php
                        }
                    
                    ?>    

                </select>
            </div>
            <input id="ok" type="submit" value="Valider" class="btn btn-success" 
                   role="button">
        </form>
    </div>
</div>