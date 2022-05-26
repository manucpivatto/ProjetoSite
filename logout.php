<?php
SESSION_START();
$email = $_SESSION["email_user"];

unset($_SESSION["email_user"]);
unset($_SESSION["senha_user"]);
session_destroy();
header('Location: index.php');
exit();

?>
