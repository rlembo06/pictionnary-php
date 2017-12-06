<header>
    <h1>Inscription</h1>
</header>

<main>

    <?php
    if (isset($_SESSION['id']) AND isset($_SESSION['email']))
    { ?>

    <p>CONNECTE</p>

    <?php } else { ?>

    <p>DECONNECTE</p>

    <?php } ?>
    <section>

        <h2>Main</h2> 
        
    </section>

</main>