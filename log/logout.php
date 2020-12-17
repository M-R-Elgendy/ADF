<?php error_reporting(E_ALL ^ E_DEPRECATED); ?>
<?php include session_start(); ?>

<?php


session_destroy();

header("Location: ../");

?>
