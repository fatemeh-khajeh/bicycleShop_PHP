<?php

require_once("inc/database.php");
$per_page_num = 1;
$resultat= mysqli_query($link,"Select novelo,marque,prix,photo from velo");

$contenu = '';
$contenu = '<div class="title"><h1>Liste des Velos</h1></div>';
$contenu .= '<table class="table table-striped">
<tr>
<th>NUMERO</th>
<th>MARQUE</th>
<th>PRIX</th>
<th>PHOTO</th>
</tr>';

	$donnees = $resultat;
	while($produit = $donnees->fetch_assoc())
	{
		$contenu .= '<tr>';
		$contenu .= "<td>$produit[novelo]</td>";
    $contenu .= "<td>$produit[marque]</td>";
    $contenu .= "<td>$produit[prix]</td>";
    $contenu .= "<td><img src=Images/$produit[photo] width='50px' height='50px'></td>";
  	$contenu .= '</tr>';
	}
$contenu .= '</table>';

//--------------------------------- AFFICHAGE HTML ---------------------------------//
require_once("inc/haut.inc.php");
echo $contenu;
mysqli_close($link);
require_once("inc/bas.inc.php");
?>
