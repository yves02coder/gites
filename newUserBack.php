<?php
session_start();
$title = "Inscription";
ob_start();
require "Templates/connexion.php";
?>


<?php
$name =htmlspecialchars($_POST['name_new_user']);
$password = htmlspecialchars($_POST['password_new_user']);

var_dump($name);
var_dump($password);

$sql = "INSERT INTO users (password_user, name_user)
  VALUES ('$password','$name')";

$bdd->exec($sql);

header('Location: http://localhost/Gites/');
?>

<?php
$content = ob_get_clean();
require "Templates/template.php";
?>