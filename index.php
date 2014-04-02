<?php
require_once "./template/Head.php";
require_once "./template/Bottom.php";

$head = new Head();
$head->printHead("HOME");
?>

Hola :D

<?php
$bottom = new Bottom();
$bottom->printBottom();
?>
