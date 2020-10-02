# Sécurité !
On va aborder les 3 principales failles de sécurité :

* XSS
* SQL I
* CSRF
Plus une petit politique de sécurité, présente partout, très pratique mais potentiellement un peu "embettant" : les CORS.

## CORS
Et non, pas les corses ! ni l'écorce ! ni The Cors (attention ça se corse...)

Cross Origin Ressource Sharing (politics)

=> (politique de) partage des ressources à travers différentes origines

Pour limiter les "bourrinages" (= les requetes à répétition dans le but de surcharger un serveur => Deny of Service), les standards du web proposent un principe relativement simple :

Soit on est sur le même domaine (l'origine de la requête et la cible de la requête sont sur le même domaine = même adresse + même port)
Soit on est sous controle des politiques CORS
la clef du problème
THE info importante : C'est le serveur qui définit les CORS ! Le front ne fait "qu'obéir"

CORS, c'est un peu comme le videur à l'entrée d'une API : soit tu viends du même quartier, tu peux rentrer, sinon faut être sur la liste des invités !

Donc pour nous, c'est dans express qu'on va devoir régler les choses !

Et pour ça => package npm !

## SQL Injection
Rappel du principe
Écrire du SQL dans un input (formulaire, params GET, via JS, ...), et le serveur va appliquer une concaténation non sécurisée => notre SQL va être éxecuté.

Se protéger
Utiliser des requêtes préparées (avec des requetes templatée, comme les "$1 $2" dans pg) => ça fait le travail car ça "échappe" les instructions SQL, qui seront considérées comme de simple chaine de caractères.
Utiliser un ORM (comme Sequelize) => tous les ORM utilisent des requêtes préparées (ou équivalent)
MAIS ATTENTION : dans les 2 cas, on utilise un package. Or, les packages, c'est codé par des gens... et les gens ne sont pas parfaits (révélation!) Donc il peut très bien y avoir des failles DANS ces packages !

Par exemple, une faille découverte dans Sequelize 4, en juin 2019 : https://snyk.io/vuln/SNYK-JS-SEQUELIZE-450221

## XSS
Cross (X = croix) Site Scripting

le principe
Injecter un bout de code (notamment du JS) dans un input (formulaire, params GET, etc...).

Quand le site va vouloir afficher l'info en question (résultat de recherche, nom d'utilisateur, ...), il se retrouve à injecter dans le DOM du code qui va s'executer !!!

Si on est malveillant, on peut s servir de ce code injecté pour faire à peu près ce qu'on veut (voler des cookies, installer des scripts sur la machine, ...)

se protéger ?
la protection ultime, c'est de désactiver le JS.

problème 1: et mon application SPA, elle marche comment maintenant? et REACT ? ha... zut...
problème 2 : en tant que dev, je n'ai aucun moyen de désactiver le JS de mon utilisateur => c'est à lui de le faire.
côté front => arrêter d'utiliser innerHTML. Trop dangereux !

déjà, si on se force à utiliser textContent, ça résoud une grosse partie des problèmes
Sauf que on a pas forcément la main sur le code front, donc on va aussi sécuriser nos données côté back.

meilleure chose à faire : assainir les données avant de les enregistrer
ça revient plus ou moins au même genre de sécurité que pour les injections sql : transformer les données pour que les bouts de code potentiels (balise HTML, fonction js, etc..) soient considérés comme de simple chaine de caractères.
pour ce faire :
en PHP, il existe une fonction native pour faire ça : htmlentities
en JS, pas de fontcion native. mais y'a des packages !

## CSRF
Cross-Site Request Forgery

# RGPD

* Penser à utiliser les regles de RGPD