<?php

$contenu = '';
$contenu .= '<div class="title">
  <h1>Bienvenue</h1>
</div>
<div class="logo">
  <img src="Images/logo.jpg" alt="velo">
</div>';

//--------------------------------- AFFICHAGE HTML ---------------------------------/
require_once("inc/haut.inc.php");
echo $contenu;
require_once("inc/bas.inc.php");
?>
