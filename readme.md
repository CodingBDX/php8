# Git 🎁
git init
git add .
git commit -m "" , on peut rajouter un -m "" pour specifie plus de messages
git remote add origin "route du github"
git push origin "master" ou le nom de la branche 👍

***
# Exception
<!-- quand ajouter des exceptions en php -->
il faut en ajouter quand c'est des erreurs liées au code et non a l utilisation du site
les exceptions sont dans `\Exception`

## extends \Execeptions
toujours etendre de la class native Exception , native avec le slash \

## Throw
throw new Exception pour invoquer

## Call with try and catch
l'utilisation de try suivi d un catch pour appeller le message ou autre catch(Exeception $e) {$e->getmessage}

***


# Router
<!-- router les pages dans le public -->
function router dans un fichier router, nouvelle instance
## nouvelle instance
`$router = new Router();`

## call router 🇹🇫
% call la function et l'inclure le $path et suivi de l action $action = function
`$router->register('/', function() {

})`

## explode 🤯
% `explode($__SERVER['REQUEST_URI'])` poour separer le path de l action contact?send=message

### explode suite
`explode('?', $uri)[0];` concerve unique le 1er argument

## $this->router[$path]
`$action = $this->routes[$path] ?? null;`
 on cherche le chemin et on l'inclus dans la variable $action sinon il retourne null

## use
ne pas oublier le `use \route\of\class` pour utiliser une function d une class


***
# autload 📢
## autoload et composer
voir composer et psr-4 pour creer une route logique avec un dossier public

## recharge composer.json
pour recharger il faut dans un terminal taper `composer dumpautoload`
***
# Controller
## faire passer valeur
mettre une valeur en argument avec [] qu permet avec cet array de definir plusieurs arguments
`['\', ['Conttroller/homeController', othe argument]]`
## Different type a passer
pour passer different type à une variable, il suffit de mettre après le 1er arguement | par exemple `callable|array` pour initie les 2 types

## verification ✅
si vous voulez verifier que ces un array ou callable il faut ecrire is_array ou is_callable
il y a d'autre class en php pour verifier class_exists, method_exists pour verifier les deux `$$` entre

## prendre plusieurs valeur
la valeur $action retourne deux chose, le controller et l action index, pour extraire ces donnees il suffit de faire
`[$class, $method] = $action;

***
# render

## revenir un cran en dessous
pour revenir un cran en dessous `dirname(__DIR__)`

## besoin d'acceder a un dossier
la commande `define` avec 2 arguments permets de definir son chemin

## composer definition namespace
les namespaces principaux peuvent etre definit dans le composer `'source\': 'src/' `

## ob_start()

système de buffering
permeter d'extraire des parametres (variable) avant de require une 'view' par exemple
`ob_get_clean()` pour relacher le tampon

## renderer::make('home/index')
plus esthetique et simple de rendre une vue en utilisant type `static`

## class magic
permet de faire adopter a la class ou function un comportement, elle commence toujours par _to

***
## chargement class
possible de faire appel a une function d'une class comme ceci `(new App($route))->new();`

## apparte mysql
pour creer une table CREATE TABLE ensuite toujours creer le id en type INT et valeur primary key not null (obligation d'implemanter)
pour incrementer dans une table `insert into le nom de la table puis values`

## relier code a table sql utilisation de class mere \PDO
il faut definir une nouvelle instance $pdo = new \PDO('mysql:dbname=name of db';host=host defini avec docker, 'user', 'password') ensuite dans un array = [] on peut lui indiquer d'envoyer toutes les données sous forme d'object
\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ et pour renvoyer les erreurs sous forme d'exception
 \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,

 essayer de mettre des constante pour user password host et les appeler constant::db_user

 retourner les infos de la base function getpdo: \PDO avec return static::$pdo

 pour prendre les données ne pas oublier de query('SELECT * FROM USER') on prend tout de la class user puis un fetchAll

 ## framework
 sur les framework c'est beaucoup plus simple de recuperer les infos des tables `$nomdetable->all();`
 il ne faut pas a chaque fois taper les tables un simple 'private string $table = 'users' puis dans le query de pdo injecter avec `{$this->table}`

 ## recuperation de la class pour joindre le nom de la class avec le nom de table
 $this->table = get_class($this); il recuperer l'entierter du model Model/user il faut donc faire un explode
 $this->table = explode('\\', get_class($this)[1]); il prend juste en compte user de la class qui correspond au user de la table puis strtolower pour s'assurer qu'il soit en minuscule

## function compact
compact permet de sortir le resultat en tableau au lieu dans array
puis apres le ob_start qui permet de mettre en buffering les informations
on peut faire la function extract($params) sur nos paramettres

### views 
nous avons maintenant acces a nos $params [array] dans note vue du coup un foreach
pour recuperer en mode object
<?php foreach($users as $user): ?>
et $user->email (le nom de la table dans le sql)
<?php endforeach ?>


***
# test sur notre architecture ù*controller exemple
telecharger via composer phpunit

il faut extends la class que l'on creer pour le test de phpunit, Testcase

pour qu'il comprenne que c'est un test, on peut ecrire au debut du nom de la function test, ou bien au dessus
/** @test **/

dans la function il attend quelque chose `$this->assertTrue(true)`; puis lancer le test phpunit ./vendor/bin/phpunit

## assertEqual

pour inserer differente valeur par exemple `$this->assertEquals('/', 'Controllers/Homeconstroller', 'index')`