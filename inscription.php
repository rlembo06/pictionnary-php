<?php
// ***************** //
// HEADER:
require('extend/header.php');
// ***************** //
?>

<?php
if( empty($_SESSION['id']) && empty($_SESSION['email']) ) {
?>

<h1>Inscription</h1>

<main>
    
    <section>
        
        <div id="errorMessage"></div>
        
        <form class="inscription" id="inscription" action="#" name="inscription" enctype="multipart/form-data">
            <span class="required_notification">Les champs obligatoires sont indiqués par *</span>

            <ul>  
                <li>  
                    <label for="email">E-mail* :</label>  
                    <input type="email" name="email" id="email" autofocus required/>  
                    <span class="form_hint">Format attendu "name@something.com"</span>  
                </li>  
                <li>  
                    <label for="prenom">Prénom* :</label>  
                    <input type="text" name="prenom" id="prenom" required placeholder="Prénom"/>  
                </li>
                <li>  
                    <label for="nom">Nom :</label>  
                    <input type="text" name="nom" id="nom" />  
                </li>
                <li>  
                    <label for="telephone">Téléphone :</label>  
                    <input type="tel" name="telephone" id="telephone" />  
                </li>
                <li>  
                    <label for="website">Site web :</label>  
                    <input type="url" value="http://" name="website" id="website" />  
                </li>
                <li class="liSexe">  
                    <label for="homme" class="sexe">Homme :</label>  
                    <input type="radio" name="sexe" id="homme" class="sexe" value="h"/>
                    <label for="femme" class="sexe">Femme :</label>  
                    <input type="radio" name="sexe" id="femme" class="sexe" value="f"/> 
                </li>
                <li>  
                    <label for="ville">Ville :</label>  
                    <input type="text" name="ville" id="ville" />  
                </li>
                <li>  
                    <label for="taille">Taille :</label>  
                    <input type="number" min="0" max="2.50" value="1.5" step="0.01" name="taille" id="taille"/>
                </li>
                <li>  
                    <label for="couleur">Couleur préférée :</label>  
                    <input type="color" name="couleur" id="couleur" class="inputColor" value="#000000"/>
                </li>
                <li>  
                    <label for="mdp1">Mot de passe* :</label>  
                    <input
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
                    <input type="date" name="birthdate" id="birthdate" placeholder="JJ/MM/AAAA" required onchange="computeAge()"/>  
                    <span class="form_hint">Format attendu "JJ/MM/AAAA"</span>  
                </li>  
                <li>  
                    <label for="age">Age:</label>  
                    <input type="number" name="age" id="age" disabled/>  
                </li>

                <li>  
                    <label for="profilepicfile">Photo de profil:</label>  
                    <input class="form-control" type="file" name="profilepicfile" id="profilepicfile"/>  
                    <span class="form_hint">Choisissez une image.</span>  
                    <img  name="profilepic" id="profilepic"/>  
                </li>

                <li>  
                    <input id="submit" type="submit" value="Soumettre Formulaire" /> 
                </li>  
            </ul> 

        </form>

    </section>

</main>

<?php 
} elseif (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
}?>
        
<?php
// ***************** //
// FOOTER:
require('extend/footer.php');
// ***************** //
?>