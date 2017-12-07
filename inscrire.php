<?php
// ***************** //
// HEADER:
require('extend/header.php');
// ***************** //
?>

<?php
if( empty($_SESSION['id']) && empty($_SESSION['email']) ) {
?>

<!-- Inscription -->
<?php require("modules/inscription.php"); ?>
<!-- ______________________________________ -->

<?php } ?>
        
<?php
// ***************** //
// FOOTER:
require('extend/footer.php');
// ***************** //
?>