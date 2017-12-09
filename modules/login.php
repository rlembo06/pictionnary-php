<header>
    <h1>Connexion</h1>
</header>

<main>

    <section>

        <form id="connexion" method="post" action="traitements/req_login.php">
            <fieldset>
                <legend>Se connecter</legend>
                <ul>  
                    <li>  
                        <label for="email">E-mail :</label>  
                        <input type="email" name="email" id="emailConnexion" required/>  
                        <span class="form_hint">Format attendu "name@something.com"</span>  
                    </li> 
                    <li>  
                        <label for="mdp1">Mot de passe :</label>  
                        <input
                            required
                            placeholder="Saisir le mot de passe"
                            type="password" 
                            name="password" 
                            id="mdpConnexion" 
                            pattern="[0-9a-zA-Z]{5,9}" 
                            />  
                        <span class="form_hint">De 6 à 8 caractères alphanumériques.</span>  
                    </li>
                    <li>  
                        <input id="submit" type="submit" value="Connexion" /> 
                    </li>
                    <li>  
                        <a href="inscrire.php">S'inscrire</a>
                    </li>  
                </ul>
            </fieldset>
        </form>

    </section>

</main>