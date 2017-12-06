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
                       
                        <!-- ****** ZONE A RECUPERER (DEBUT) ****** -->
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
                        <!-- ****** ZONE A RECUPERER (FIN) ****** -->
                        
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