<?php

$contenu = '';
$contenu .= '<div class="title">
  <h1> Contactez-nous! <br>
  Phone: (514)5678888 <br></h1>
  <a href="mailto:info@velo.com"><h1>Email: info@velo.com</h1></a>
</div>';

//--------------------------------- AFFICHAGE HTML ---------------------------------/
require_once("inc/haut.inc.php");
echo $contenu;
require_once("inc/bas.inc.php");
?>
