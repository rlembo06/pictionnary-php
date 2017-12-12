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

    <section>
        <?php foreach ($drawings as $drawing) { ?>
        
            <pre class="drawings" id="<?= $drawing->id ?>">
                <img src="<?= $drawing->draw ?>">
                <div>
                    <p>Commandes : <?= $drawing->commandes ?></p>
                </div>
            </pre>
            
        <?php }?>
    </section>
    
</main>

<?php } else require("modules/login.php"); ?>
        
<?php
// ***************** //
// FOOTER:
require('extend/footer.php');
// ***************** //
?>