<!DOCTYPE html>  
<html>
    
    <head>  
        <meta charset=utf-8 />  
        <title>Pictionnary - Inscription</title>
        <meta name="description" content="TP - Lembo Romain">
        
        <link rel="stylesheet" href="css/perso.css"/>
<!--        <link rel="stylesheet" media="screen" href="css/styles.css" > -->
        <link 
            rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
            crossorigin="anonymous" />

    </head> 
    
    <body>  
        
        <header>
            <h1>Inscription</h1>
        </header>
        
        <main>
            
            <section>
                
                <h2>Inscrivez-vous</h2> 
                <form class="inscription" action="req_inscription.php" method="post" name="inscription">  

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
                            <label for="siteweb">Site web :</label>  
                            <input type="url" name="siteweb" id="siteweb" />  
                        </li>
                        <li>  
                            <label for="homme">Homme :</label>  
                            <input type="radio" name="sexe" id="homme" value="homme"/>
                            <label for="femme">Femme :</label>  
                            <input type="radio" name="sexe" id="femme" value="femme"/> 
                        </li>
                        <li>  
                            <label for="ville">Ville :</label>  
                            <input type="text" name="ville" id="ville" />  
                        </li>
                        <li>  
                            <label for="taille">Taille :</label>  
                            <input type="number" min="0" max="2.50" value="1.5" step="0.01" name="taille" id="taille">
                        </li>
                        <li>  
                            <label for="couleur">Couleur préférée :</label>  
                            <input type="color" name="couleur" id="couleur" value="#000000"/>
                        </li>
                        <li>  
                            <label for="mdp1">Mot de passe :</label>  
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
                            <label for="mdp2">Confirmez mot de passe :</label>  
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
                            <label for="birthdate">Date de naissance:</label>  
                            <input type="date" name="birthdate" id="birthdate" placeholder="JJ/MM/AAAA" required onchange="computeAge()"/>  
                            <span class="form_hint">Format attendu "JJ/MM/AAAA"</span>  
                        </li>  
                        <li>  
                            <label for="age">Age:</label>  
                            <input type="number" name="age" id="age" disabled/>  
                        </li>
                        
                        <li>  
                            <label for="profilepicfile">Photo de profil:</label>  
                            <input class="form-control" type="file" id="profilepicfile" onchange="loadProfilePic(this)"/>  
                            <!-- l'input profilepic va contenir le chemin vers l'image sur l'ordinateur du client -->  
                            <!-- on ne veut pas envoyer cette info avec le formulaire, donc il n'y a pas d'attribut name -->  
                            <span class="form_hint">Choisissez une image.</span>  
                            <!--<input type="hidden" name="profilepic" id="profilepic"/>-->  
                            <img  style="display: none;" name="profilepic" id="profilepic"/>  
                            <!-- l'input profilepic va contenir l'image redimensionnée sous forme d'une data url -->  
                            <!-- c'est cet input qui sera envoyé avec le formulaire, sous le nom profilepic -->  
                            <canvas id="preview" width="0" height="0" style="border:1px solid #000000;"></canvas>  
                            <!-- le canvas (nouveauté html5), c'est ici qu'on affichera une visualisation de l'image. -->  
                            <!-- on pourrait afficher l'image dans un élément img, mais le canvas va nous permettre également  
                           de la redimensionner, et de l'enregistrer sous forme d'une data url-->            
                        </li>
                        
                        <li>  
                            <input type="submit" value="Soumettre Formulaire" /> 
                        </li>  
                    </ul> 
                    
                </form>
                
            </section>
            
        </main>
        
        <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script  type="text/javascript" src="js/script.js"></script>
    </body> 
    
</html> 