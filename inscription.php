<!DOCTYPE html>  
<html>
    
    <head>  
        <meta charset=utf-8 />  
        <title>Pictionnary - Inscription</title>
        <meta name="description" content="TP - Lembo Romain">  
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
                            <input type="range" min="0" max="2.50" step="0.01" name="taille" id="taille" />
                        </li>
                        <li>  
                            <label for="couleur">Couleur préférée :</label>  
                            <input type="color" name="couleur" id="couleur" value="#000000"/>
                        </li>
                        <li>  
                            <input type="submit" value="Soumettre Formulaire"> 
                        </li>  
                    </ul> 
                    
                </form>
                
            </section>
            
        </main>
          
    </body> 
    
</html> 