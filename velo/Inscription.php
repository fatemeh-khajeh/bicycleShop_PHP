<?php

$contenu = '';
$contenu .= '
  <div class="form-group">
    <h1>inscription de nouveau</h1>
    <form class="" action="inc\insert.php" method="post">
    <p>
      <label for="noami">ID</label>
      <input type="text" name="noami_name" id="noami">
    </p>
      <p>
        <label for="nom">Nom</label>
        <input type="text" name="nom_name" id="nom">
      </p>
      <p>
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom_name" id="prenom">
      </p>
      <p>
        <label for="telephone">Telephone</label>
        <input type="text" name="telephone_name" id="telephone">
      </p>
      <p>
        <label for="login">Login</label>
        <input type="text" name="login_name" id="login">
      </p>
      <p>
        <label for="pass">Password</label>
        <input type="text" name="pass_name" id="pass">
      </p>
        <input type="submit" value="Inscrire">
    </form>
  </div>';

//--------------------------------- AFFICHAGE HTML ---------------------------------/
require_once("inc/haut.inc.php");
echo $contenu;
require_once("inc/bas.inc.php");
?>
