<?php
session_start();

require_once("inc/database.php");

$per_page_num = 3;

$resultat= mysqli_query($link,"Select novelo,marque,prix,photo from velo");
$total_rec = mysqli_num_rows($resultat);
$total_page = ceil($total_rec/$per_page_num);

if(isset($_GET['page'])) {
  $page = $_GET['page'];

}else {
  $page = 1;
}

$start_page = ($page-1)*$per_page_num;
$result= mysqli_query($link,"Select novelo,marque,prix,photo from velo LIMIT $start_page,$per_page_num");


$contenu = '';
$contenu = '<div class="title"><h1>Liste des Velos</h1></div>';
$contenu .= '<table class="table table-striped">
<tr>
<th>NUMERO</th>
<th>MARQUE</th>
<th>PRIX</th>
<th>PHOTO</th>
</tr>';

	$donnees = $result;
	while($produit = $donnees->fetch_assoc())
	{
		$contenu .= '<tr>';
		$contenu .= "<td><a href=velo.php?novelo=".urlencode($produit['novelo']).">$produit[novelo]</a></td>";
    $contenu .= "<td>$produit[marque]</td>";
    $contenu .= "<td>$produit[prix]</td>";
    $contenu .= "<td><img src=Images/$produit[photo] width='50px' height='50px'></td>";
    $contenu .= '</tr>';
	}
$contenu .= '</table>';

//--------------------------------- AFFICHAGE HTML ---------------------------------//
require_once("inc/memaut.php");
echo "  Bienvenue  ".$_SESSION["login"];
echo $contenu;
for ($i=1;$i<=$total_page;$i++) {
  echo "<a href='membre.php?page=".$i."' class='btn btn-primary'>$i</a>";
}
//mysqli_close($link);
require_once("inc/bas.inc.php");
?>
