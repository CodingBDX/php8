
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

