# Spécifications techniques

## Serveur

- Wamp
- PHP 8.0
- extension PHP: PDO
- My SqL

## Front

- HTML5 (Twig)
- CSS3
- Bootstrap
- Javascript

## Back

- PHP 8.0
- Symfony 5.3.9
- MySql


## Comment utiliser le projet en local

Lancer l'invit de commandes puis cloner le projet:
```bash
git clone https://github.com/bertranddetre/lamediatheque_currotek.git
```
Créer une copie du .env en le nommant .env.local
  ```bash
  cp .env .env.local
  ```
Modifier le fichier .env.local afin de le rendre compatible avec votre environement (décommenter votre BDD avec laquelle vous travaillez, écrire votre identifiant, votre mot de passe et donnez un nom de projet ) 
 ```bash
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"
 ```
puis installer les dépendances php:
```bash
composer install
```
Une fois le projet installé il faut créer la base de donnée :

```bash
symfony console doctrine:database:create
```

Jouer les migrations :

```bash
symfony console doctrine:migrations:migrate
```
Lancer les DataFixtures :

```bash
symfony console doctrine:fixture:load 
```
Lancer le projet:

```bash  
 symfony server:start
```

A NOTER:
> Vous pouvez remplacer la commande "symfony console" dans votre terminal par "php bin/console" si vous n'utilisez pas le "cli symfony"


 ## Se connecter à l'application

| email             | mot de passe  |
| ----------------- | --------------|
| admin@email.com   | test12345     |
| employe@email.com | test12345     |
| user@email.com    | test12345     |
 
## Les choix techniques

### Sécurité

Au niveau des mesures de sécurité j'ai décidé d'appliqué plusieurs pratiques recommandées.

```
1.Hashage du mot de passe en base de données.
```
Le mot de passe de l'utilisateur ne doit pas apparaitre en clair dans la BDD; j'utilise donc "l'encodage automatique" de Symfony grâce à son bunddle Security.
```
2.Le csrf token
```
La protection CSRF fonctionne en ajoutant un champ masqué à mon formulaire qui contient un token.</br> Cela garantit que c'est bien l'utilisateur qui soumet les données au formulaire.
```
3.Le fichier security.yaml dans le dossier config/packages de Symfony
```
J’ai décommenté la protection du panel d’administrateur : seuls les utilisateurs autorisés peuvent s’y rendre.

<hr>
## Lien utiles

Dans cette section je met à disposition tous ce dont je me suis appuyé pour réaliser cette application :

- [Trello](https://trello.com/invite/b/sNOMnRQ7/562f7bafd285b640a1aae9b08efaa3a6/m%C3%A9diath%C3%A8que)
- [Projet Github](https://github.com/bertranddetre/lamediatheque_currotek.git)
