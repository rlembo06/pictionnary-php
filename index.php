<?php
// ***************** //
// HEADER:
require('extend/header.php');
// ***************** //
?>

<?php if( isset($_SESSION['id']) && isset($_SESSION['email']) ) { ?>

<!-- Inscription -->
<?php require("modules/paint.php"); ?>
<!-- ______________________________________ -->

<?php } else require("modules/login.php"); ?>
        
<?php
// ***************** //
// FOOTER:
require('extend/footer.php');
// ***************** //
?>