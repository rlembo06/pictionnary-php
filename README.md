##############
page inscription.php
#############

1)
Q :
c'est quoi les attributs action et method ?

R :
Attribut "action" : Permet de spécifier une URI pour éffectuer le traitement du formulaire.
Attribut "method" : Permet de spécifier la méthode HTTP pour envoyer les données vers le serveur (GET, POST, PUT, DELETE, etc).
//-------------------------------//

2)
Q :
qu'y a-t-il d'autre comme possiblité que post pour l'attribut method ?

R :
Il y a GET, PUT, DELETE, OPTIONS, TRACE, HEAD, CONNECT, PATCH).
//-------------------------------//

3)
Q :
quelle est la différence entre les attributs name et id ?

R :
Attribut "name" : Pour identifier le champs d'un formulaire lors de l'envoie de ce dernier vers le serveur.
Attribut "id" : Est un identifiant unique qui doit être unique pour l'ensemble du document. Pour modifier son style CSS par exemple ou lui attribuer une fonction en JavaScript.
//-------------------------------//

4)
Q :
c'est lequel qui doit être égal à l'attribut for du label ?

R :
C'est l'attribut name qui doit avoir le même id que l'attribut for du label.
//-------------------------------//

##############
Validation des mots de passe
#############

1)
Q :
quels sont les deux scénarios où l'attribut title sera affiché ?

R :
Si le mot de passe ne respecte pas les normes du pattern

//-------------------------------//

2)
Q :
encore une fois, quelle est la différence entre name et id pour un input ?

R :
Le name sert à identifier l'input pour récupérer sa valeur lors de l'envoi du formulaire.
l'id sert à identifier l'input pour le JavaScript ou le CSS

//-------------------------------//

3)
Q :
pourquoi est-ce qu'on a pas mis un attribut name ici ?

R :
Car on récupérera le mot de passe saisi dans #mdp1
//-------------------------------//

4)
Q :
quel scénario justifie qu'on ait ajouté l'écouter validateMdp2() à l'évènement onkeyup de l'input mdp1 ?

R :
Pour comparer les valeurs de #mdp1 et #mdp2 lors de la confirmation du mot de passe à l'envoi du formulaire.
//-------------------------------//

5)
Q :
à quoi sert l'attribut disabled ?

R :
A saisir une valeur dans l'input concerné.
//-------------------------------//