# Liens utiles
## https://www.youtube.com/watch?v=MwqucMhDGR8
## https://github.com/vercel-community/php?tab=readme-ov-file

## lancer un serveur. Allez dans la racine public et lancer le serveur
## > php -S localhost:8000



# Crash Course : Déployer un projet PHP gratuitement avec Vercel

## Introduction
**0:00** - Salut et bienvenue dans ce nouveau Crash Course  
**0:02** - Dans lequel je vous explique comment déployer votre projet PHP gratuitement à l'aide de Vercel.  
**0:06** - Pour cette vidéo, vous aurez besoin d'un compte Github et savoir comment y envoyer votre projet.  
**0:11** - *(Je ne vous l'explique pas dans cette vidéo.)*  

## Structure du projet
**0:15** - Généralement, on commence directement par créer un fichier `index.php`.  
**0:21** - Sauf qu'ici, ce ne sera pas le cas.  
**0:23** - On crée d'abord un dossier `api` dans lequel on crée un fichier `index.php`.  
**0:29** - Dans `index.php`, on va `require` un fichier `index.php` qui se trouvera dans un dossier `public`.  

## Utilisation de `__DIR__`
**1:02** - On utilise `__DIR__` lorsqu'on appelle un fichier en PHP car ça nous permet d'indiquer l'emplacement absolu de notre fichier, ce qui évite les erreurs.  

## Codage du projet
**1:51** - `index.php` dans le dossier `public` est celui dans lequel on va coder.  
**2:02** - On va créer un fichier `vercel.json` pour faire comprendre à Vercel ce que l'on va faire.  

## Configuration de la runtime sur Vercel
**2:31** - On utilise la runtime `"vercel-php@0.7.1"` pour le fichier `api/index.php`.  
**2:50** - Pour connaître la dernière version disponible de la runtime `"vercel-php"`, rendez-vous sur le lien dans la description.  
**3:04** - On utilise la runtime `"vercel-php@0.7.1"` pour le fichier `api/index.php`.  

## Définition des routes
**3:19** - Ensuite, on crée un tableau `routes`.  
**3:27** - On commence toujours ce tableau par l'objet suivant pour indiquer quel fichier utilise la runtime `"vercel-php"`.  
**4:00** - Ensuite, on indique l'emplacement de nos fichiers pour qu'ils se trouvent dans le dossier `public`.  

## Gestion des requêtes et fichiers statiques
**5:35** - Pour éviter la répétition, on peut dire que toutes les requêtes HTTP de fichiers qui finissent par `.png` dans le dossier `/assets/img` vont être redirigées dans le dossier `public`.  
**6:19** - On peut également écrire simplement `"(.*)"` pour rediriger absolument toutes les requêtes du dossier `/assets/img` dans le dossier `public`.  
**6:33** - Il faut toujours finir le tableau `routes` par l'objet suivant. Cela permet de rediriger toutes les requêtes non reconnues précédemment dans le fichier `api/index.php`.  

## Déploiement sur Vercel
**7:34** - Maintenant, vous pouvez coder.  
**8:04** - Étant donné que l'on n'est pas sur Vercel quand on code, on doit se déplacer dans le dossier `public` à l'aide de `cd public`.  
**8:40** - On peut maintenant **Commit** notre projet sur GitHub.  
**9:00** - Ensuite, vous connectez votre compte GitHub sur Vercel.  
**9:08** - Vous ajoutez votre projet GitHub pour le déploiement.  

## Correction des erreurs de déploiement
**9:25** - Une erreur apparaît. Pour la corriger, il faut changer la version de Node.js en la version 18. *(Il faut "Commit" une fois de plus pour actualiser le déploiement.)*  
**10:03** - Le projet est déployé. Le fichier CSS marche, de même pour l'image grâce aux `routes`.  

## Gestion des fichiers JSON sur Vercel
**10:13** - On ne peut pas modifier un fichier `JSON` sur Vercel car celui-ci utilise le **CI/CD**.  
**10:23** - Le **CI/CD** permet de déployer votre projet dès que vous l'avez **push** sur GitHub.  
  - Sauf que l'on ne peut pas modifier les fichiers sur GitHub car elles sont statiques.  
  - **Alternative** : Utiliser une base de données externe.  
**10:41** - On ne peut donc que lire des données d'un fichier `JSON`. *(Ne pas oublier d'ajouter `data.json` dans les `routes`.)*  
**12:56** - Le fichier JSON peut être lu.  

## Conclusion
**13:07** - Merci d'avoir regardé !  
