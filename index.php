<?php
require_once "./template/Head.php";
require_once "./template/Bottom.php";

$head = new Head();
$head->printHead("HOME");
?>

Hola :D
<script type="text/javascript">
    z = 1;
    slider();
    nIntervId = window.setInterval(slider, "6000");
</script>
<?php
$bottom = new Bottom();
$bottom->printBottom();
?>
