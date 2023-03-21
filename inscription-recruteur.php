<?php require 'fonctions.php' ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="inscription-recruteur.css" />
  </head>
  <body>
    <a href="" id="symbole">Retour</a>
    <div>
      <form action="recruteur.php" method="post">
        <h3 id="head">CRÉATION DE COMPTE</h3>

        <h5>Vos coordonnées</h5>

        <label class="required">Adresse email </label>
        <input type="email" name="mail" required /> <br /><br />

        <label class="required">Civilité </label>
        <input type="radio" name="formation" value="Homme" required />Monsieur
        <input type="radio" name="formation" value="Femme" required />Madame
        <br /><br />

        <label class="required">Prénom </label>
        <input type="text" name="prenom" required /> <br /><br />

        <label class="required">nom </label>
        <input type="text" name="nom" required /> <br /><br />
<?php $cats=getCategoriesTravail(); ?>
<label class="required" class="etre">Fonction d'entrerise </label>
        <select id="etre" name="specialite" multiple required>
          <option></option>
          <?php foreach ($cats as $cat) : ?>
          <option><?php echo $cat; ?></option>
          <?php endforeach; ?>
        </select>
        <br /><br />

        <label class="required">Téléphone </label>
        <input type="tel" name="telephone" required /> <br /><br />

        <div class="horizontal"></div>
        <br />

        <h5>Votre entreprise</h5>

        <label class="required">SIRET </label>
        <input
          type="number"
          name="codeS"
          min="0"
          required
          placeholder="Code SIRET (14 chiffres)"
        />
        <br /><br />

        <label class="required">Raison social </label>
        <input type="text" name="raison" required /> <br /><br />

        <label class="required">Pays </label>
        <input type="text" name="pays" required /> <br /><br />

        <label class="required">Code postal </label>
        <input type="number" name="codeP" min="0" required /> <br /><br />

        <label class="required">Ville </label>
        <input type="text" name="ville" required /> <br /><br />

        <label class="required">Adresse </label>
        <input type="text" name="adress" required /> <br /><br />

        <h6 id="champ">*Champs obligatoires</h6>

        <div class="horizontal"></div>
        <br />

        <input type="reset" value="ANNULER" name="annuler" class="show" />
        <input
          type="submit"
          name="valider"
          value="CONFIRMER VOTRE CRÉATION DE COMPTE"
          class="marg"
        />
      </form>
    </div>
  </body>
</html>
