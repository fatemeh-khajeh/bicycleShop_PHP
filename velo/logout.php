<?php
session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo '<h1>Logout successfully !</h1>';
echo '<a href="index.php">Accueil</a>';
?>
