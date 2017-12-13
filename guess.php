<?php
// ***************** //
// HEADER:
require('extend/header.php');
// ***************** //
?>

<?php if( isset($_SESSION['id']) && isset($_SESSION['email']) ) { ?>

<?php
$user = new User([ 'id' => $_SESSION['id'] ]);
$drawings_json = $manager->getDrawings_byUser($user, true);
$drawings = json_decode($drawings_json);
?>

<header>
    <h1>Dessins</h1>
</header>

<main>

    <section id="drawings">
        <?php foreach ($drawings as $drawing) { ?>
        
            <pre class="drawings" id="<?= $drawing->id ?>">
                <img src="<?= $drawing->draw ?>">
            </pre>
            
        <?php }?>
    </section>
    
    <section id="thisDrawing">
        <canvas id="reDrawing" width="400" height="400"></canvas>
        <img id="imgDrawing" />
    </section>
    
</main>

<?php } else require("modules/login.php"); ?>
        
<?php
// ***************** //
// FOOTER:
require('extend/footer.php');
// ***************** //
?>