## Server

```
symfony server
symfony server:start
symfony server:stop
```

## Apres clonage d'un repo

```
composer install

(si dependances Js - npm install)
```  
```
## GIT
git add .
git commit -m "message du commit"
git remote add origin https://github.com/... # rajouter un repo remote
git remove remote origin # supprimer le lien avec la connexion 
```

## Symfony

```

Apres avoir configuré les packages pour l'ORM

symfony composer req symfony/orm-pack
symfony composer req symfony/maker-bundle --dev

#Lancer la creation de la BD
symfony console doctrine:database:create

#Creation/update des entites
symfony console make:entity

(valider pour créer une nouvelle ou rajouter des propriétés à une existante)

#Crée

```