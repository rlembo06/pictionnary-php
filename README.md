<a href="http://miageprojet2.unice.fr/User:Max/LPSIL_IDSE_-_Web_Multim%c3%a9dia_%2f%2f_Web_S%c3%a9mantique/Partie_1%3a_Application_Pictionnary">Lien du TP</>

1)
Q :
C'est quoi les attributs action et method ?

R :
Attribut "action" : Permet de spécifier une URI pour éffectuer le traitement du formulaire.
Attribut "method" : Permet de spécifier la méthode HTTP pour envoyer les données vers le serveur (GET, POST, PUT, DELETE, etc).

<hr>

2)
Q :
Qu'y a-t-il d'autre comme possiblité que post pour l'attribut method ?

R :
Il y a GET, PUT, DELETE, OPTIONS, TRACE, HEAD, CONNECT, PATCH).

<hr>

3)
Q :
Quelle est la différence entre les attributs name et id ?

R :
Attribut "name" : Pour identifier le champs d'un formulaire lors de l'envoie de ce dernier vers le serveur.
Attribut "id" : Est un identifiant unique qui doit être unique pour l'ensemble du document. Pour modifier son style CSS par exemple ou lui attribuer une fonction en JavaScript.

<hr>

4)
Q :
C'est lequel qui doit être égal à l'attribut for du label ?

R :
C'est l'attribut name qui doit avoir le même id que l'attribut for du label.

<hr>

5)
Q :
Quels sont les deux scénarios où l'attribut title sera affiché ?

R :
Si le mot de passe ne respecte pas les normes du pattern

<hr>

6)
Q :
Encore une fois, quelle est la différence entre name et id pour un input ?

R :
Le name sert à identifier l'input pour récupérer sa valeur lors de l'envoi du formulaire.
l'id sert à identifier l'input pour le JavaScript ou le CSS.

<hr>

7)
Q :
Pourquoi est-ce qu'on a pas mis un attribut name ici ?

R :
Car on récupérera le mot de passe saisi dans #mdp1

<hr>

8)
Q :
Quel scénario justifie qu'on ait ajouté l'écouter validateMdp2() à l'évènement onkeyup de l'input mdp1 ?

R :
Pour comparer les valeurs de #mdp1 et #mdp2 lors de la confirmation du mot de passe à l'envoi du formulaire.

<hr>

9)
Q :
À quoi sert l'attribut disabled ?

R :
A ne pas saisir une valeur dans l'input concerné.

<hr>

10)
Q :
À Quoi Ressemble Un <Head> Propre?


R :
```
<head>
	<meta charset=utf-8 />
	<title>Pictionnary - Inscription</title>
	<meta name="description" content="TP - Lembo Romain">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" media="screen" href="css/styles.css" >
	<link rel="stylesheet" href="css/perso.css"/>
	<link rel="stylesheet" href="css/blog-home.css">
	<link rel="stylesheet" href="css/paint.css">
</head>
```
<hr>

11)
Q :
À quoi servent ces champs hidden ?

R :
Cela est utile pour cacher un input, par exemple dans le but de récupérer un identifiant lorsque le formulaire est envoyé.


