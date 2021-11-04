<?php
require_once("inc/database.php");

if (isset($_GET['novelo']))
{
  $novel = $_GET['novelo'];
	$resultat= mysqli_query($link,"Select * from velo where novelo = '$novel'");
}


$produit = $resultat->fetch_assoc();

$contenu = '';
$contenu .= "<h2> Titre:$produit[marque]</h2> <hr/><br/>";
$contenu .= "<img src='Images/$produit[photo]' width='150' height='150' />";
$contenu .= "<p> Prix: $produit[prix]</p>";


//--------------------------------- AFFICHAGE HTML ---------------------------------//
require_once("inc/memaut.php");
echo $contenu;
require_once("inc/bas.inc.php");
