<!DOCTYPE html>  
<html>  
<head>  
    <meta charset=utf-8 />  
    <title>Pictionnary - Inscription</title>  
</head>  
<body>  
  
<h2>Inscrivez-vous</h2>  
<form class="inscription" action="req_inscription.php" method="post" name="inscription">  
    <!-- c'est quoi les attributs action et method ? -->  
    <!-- qu'y a-t-il d'autre comme possiblité que post pour l'attribut method ? -->  
    <span class="required_notification">Les champs obligatoires sont indiqués par *</span>  
    <ul>  
        </li>  
        <li>  
            <label for="email">E-mail :</label>  
            <input type="email" name="email" id="email"/>  
            <!-- ajouter à input l'attribut qui lui donne le focus automatiquement -->  
            <!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -->  
            <!-- quelle est la différence entre les attributs name et id ? -->  
            <!-- c'est lequel qui doit être égal à l'attribut for du label ? -->   
            <span class="form_hint">Format attendu "name@something.com"</span>  
        </li>  
        <li>  
            <label for="prenom">Prénom :</label>  
            <input type="text" name="prenom" id="prenom"/>  
            <!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -->  
            <!-- ajouter à input l'attribut qui donne une indication grisée (placeholder) -->  
        </li>  
        <li>  
            <input type="submit" value="Soumettre Formulaire">  
        </li>  
    </ul>  
</form>  
</body>  
</html> 