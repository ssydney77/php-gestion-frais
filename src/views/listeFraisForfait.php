<div id="contenu">
      <h2>Renseigner ma fiche de frais du 'mois d'avril'</h2>
         
      <form method="POST"  action="mon-espace/liste-frais-forfait/valider">
      <div class="corpsForm">
          
          <fieldset>
            <legend>Eléments forfaitisés
            </legend>
			<?php

        use Gsb\controllers\ElementsControlleur;

        $elements= new ElementsControlleur;
        $elements->FraisForfait();

				foreach ($elements as $unFrais){
					$idFrais = $unFrais->id;
					$libelle = $unFrais->libelle;
					$quantite = $unFrais->quantite;
			?>
					<p>
						<label for="idFrais"><?php echo $libelle ?></label>
						<input type="text" id="idFrais" name="lesFrais[<?php echo $idFrais?>]" size="10" maxlength="5" value="<?php echo $quantite?>" >
					</p>
			
			<?php
				}
			?>
			
			
			
			
           
          </fieldset>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>
  