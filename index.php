<?php
// ***************** //
// HEADER:
require('extend/header.php');
// ***************** //
?>

<?php
if( isset($_SESSION['id']) && isset($_SESSION['email']) ) {
?>

<!-- Inscription -->
<?php require("modules/main.php"); ?>
<!-- ______________________________________ -->

<?php
} 
else require("modules/inscription.php");
?>
        
<?php
// ***************** //
// FOOTER:
require('extend/footer.php');
// ***************** //
?>