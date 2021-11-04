<?php
session_start();
include("inc\database.php");
extract($_POST);


if(isset($submit))
{
	$rs=mysqli_query($link,"select * from amis where login='$user_id' and password='$passm'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$user_id;
	}
}
if (isset($_SESSION["login"]))
{

echo '<h1 align=center>You are sucessfully login!</h1><br><a href="membre.php">Liste des Velos</a>';
exit;
}

$contenu1 = '';
$contenu1 .= '

    <div class="form group">
      <h1>Branchez-vous Membre</h1>
      <form name="form1" method="post">
        <p>
          <label for="loginid">Login</label>
          <input type="text" name="user_id" id="loginid">
        </p>
        <p>
          <label for="pass-m">Password</label>
          <input type="password" name="passm" id="pass-m">
        </p>

        <input type="submit" name="submit" value="Entrez">

        <p>
            <a href="Inscription.php">Non Membre</a>
        </p>';
				$contenu2 = '';
				$contenu2 .= '  </form>
		    </div>
		    <div class="form group">
		      <h1>Administrator</h1>
		      <input type="text" name="usernamead" value="" placeholder="Username">
		      <input type="password" name="passwordad" value="" placeholder="Password">
		      <input type="button" name="ad" value="Entrez">
		    </div>';

//--------------------------------- AFFICHAGE HTML ---------------------------------/
require_once("inc/haut.inc.php");
echo $contenu1;
if(isset($found))
{

	echo '<p>Invalid user id or password<br><a href="index.php">Please try again</a></p>';
}
echo $contenu2;
require_once("inc/bas.inc.php");
