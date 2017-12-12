<header>
    <h1>Peindre</h1>
</header>

<main>

    <section>
        
        <form name="tools" id="tools" action="traitements/req_paint.php" method="post">  
            <input type="range" name="size" id="size" min="0" max="3"/>
            <input type="color" name="color" id="color" class="inputColor" value="#<?= $_SESSION['couleur'] ?>"/>
            
            <canvas id="canvas"></canvas>

            <input id="restart" type="button" value="Recommencer"/>  
            
            <input type="hidden" id="drawingCommands" name="drawingCommands"/>  
            <input type="hidden" id="picture" name="picture"/> 
            <input type="hidden" id="id_user" name="id_user" value="<?= $_SESSION['id'] ?>"/> 
            
            <input id="validate" type="submit" value="Valider"/>
        </form>
        
    </section>

</main>