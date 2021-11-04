<?php

include("database.php");
$noami_name = mysqli_real_escape_string($link, $_REQUEST['noami_name']);
$nom_name = mysqli_real_escape_string($link, $_REQUEST['nom_name']);
$prenom_name = mysqli_real_escape_string($link, $_REQUEST['prenom_name']);
$telephone_name = mysqli_real_escape_string($link, $_REQUEST['telephone_name']);
$login_name = mysqli_real_escape_string($link, $_REQUEST['login_name']);
$pass_name = mysqli_real_escape_string($link, $_REQUEST['pass_name']);


$sql = "INSERT INTO amis(noami,nom,prenom,telephone,login,password) VALUES ('$noami_name','$nom_name','$prenom_name','$telephone_name','$login_name','$pass_name' )";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    echo '<a href="index.php">Accueil</a>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo '<a href="index.php">Accueil</a>';
}

mysqli_close($link);
?>
