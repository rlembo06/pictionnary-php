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

        <h2>Inscrivez-vous</h2> 
        <form class="inscription" action="traitements/req_inscription.php" method="post" name="inscription">  

            <span class="required_notification">Les champs obligatoires sont indiqués par *</span>  

            <ul>  
                <li>  
                    <label for="email">E-mail* :</label>  
                    <input type="email" name="email" id="email" autofocus required/>  
                    <span class="form_hint">Format attendu "name@something.com"</span>  
                </li>  
                <li>  
                    <label for="prenom">Prénom* :</label>  
                    <input type="text" name="prenom" id="prenom" required placeholder="Prénom" value="<?= isset($_COOKIE['prenom']); ?>"/>  
                </li>
                <li>  
                    <label for="nom">Nom :</label>  
                    <input type="text" name="nom" id="nom" value="<?php if(!empty($_COOKIE['nom'])) echo $_COOKIE['nom']; ?>" />  
                </li>
                <li>  
                    <label for="telephone">Téléphone :</label>  
                    <input type="tel" name="telephone" id="telephone" value="<?= isset($_COOKIE['tel']); ?>" />  
                </li>
                <li>  
                    <label for="website">Site web :</label>  
                    <input type="url" value="http://" name="website" id="website" value="<?= isset($_COOKIE['website']); ?>"/>  
                </li>
                <li>  
                    <label for="homme">Homme :</label>  
                    <input type="radio" name="sexe" id="homme" value="homme"/>
                    <label for="femme">Femme :</label>  
                    <input type="radio" name="sexe" id="femme" value="femme"/> 
                </li>
                <li>  
                    <label for="ville">Ville :</label>  
                    <input type="text" name="ville" id="ville" value="<?= isset($_COOKIE['ville']); ?>"/>  
                </li>
                <li>  
                    <label for="taille">Taille :</label>  
                    <input type="number" min="0" max="2.50" value="1.5" step="0.01" name="taille" id="taille" value="<?= isset($_COOKIE['taille']); ?>">
                </li>
                <li>  
                    <label for="couleur">Couleur préférée :</label>  
                    <input type="color" name="couleur" id="couleur" value="#000000" value="<?= isset($_COOKIE['couleur']); ?>"/>
                </li>
                <li>  
                    <label for="mdp1">Mot de passe* :</label>  
                    <input
                        value="<?= isset($_SESSION['password']); ?>"
                        required
                        placeholder="Saisir le mot de passe"
                        type="password" 
                        name="password" 
                        id="mdp1" 
                        pattern="[0-9a-zA-Z]{5,9}" 
                        onkeyup="validateMdp2()" 
                        title="Le mot de passe doit contenir de 6 à 8 caractères alphanumériques." 
                    />  
                    <span class="form_hint">De 6 à 8 caractères alphanumériques.</span>  
                </li>
                <li>  
                    <label for="mdp2">Confirmez mot de passe* :</label>  
                    <input
                        value="<?= isset($_SESSION['password']); ?>"
                        placeholder="Confirmer le mot de passe"
                        type="password" 
                        id="mdp2" 
                        required
                        pattern="[0-9a-zA-Z]{5,9}"
                        onkeyup="validateMdp2()" 
                    />  
                    <span class="form_hint">Les mots de passes doivent être égaux.</span>  
                </li>

                <li>  
                    <label for="birthdate">Date de naissance* :</label>  
                    <input type="date" name="birthdate" id="birthdate" placeholder="JJ/MM/AAAA" required onchange="computeAge()" value="<?= isset($_COOKIE['birthdate']); ?>"/>  
                    <span class="form_hint">Format attendu "JJ/MM/AAAA"</span>  
                </li>  
                <li>  
                    <label for="age">Age:</label>  
                    <input type="number" name="age" id="age" disabled/>  
                </li>

                <li>  
                    <label for="profilepicfile">Photo de profil:</label>  
                    <input class="form-control" type="file" name="profilepicfile" id="profilepicfile" onchange="loadProfilePic(this)" value="<?= isset($_COOKIE['profilepic']); ?>"/>  
                    <span class="form_hint">Choisissez une image.</span>  
                    <img  style="display: none;" name="profilepic" id="profilepic"/>  
                    <canvas id="preview" width="0" height="0" style="border:1px solid #000000;"></canvas>  
                </li>

                <li>  
                    <input type="submit" value="Soumettre Formulaire" /> 
                </li>  
            </ul> 

        </form>

    </section>

</main>