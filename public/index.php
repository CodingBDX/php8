
<?php

// use Class\Enums\OfficeStatus;
// use Class\OfficeReservation;
// use Class\Reservation;
// use Class\CoffeeMachine;
// use Class\PremiumCoffeeMachine;

// use Class\Peugeot;
// use Class\Renault;
// use Class\Vehicule;

// use Class\BasicPdf;

// use Class\Exceptions\UserException;
// use Class\Exceptions\UserIsBanException;
// use Class\Exceptions\UserNoteVerifiedException;
// use Class\Login;
// use Class\User;

use Exceptions\RouteNotFoundException;
use Router\Router;

require '../vendor/autoload.php'; 

define('BASE_VIEW_BASE', './views');
$router = new Router();
phpinfo();
$router->register('/', ['Controllers\HomeController', 'index']);
 $router->register('/contact', function(){
    return 'contact';
});
try {
    echo $router->resolve($_SERVER['REQUEST_URI']);
} catch(RouteNotFoundException $e) {
   echo $e->getMessage();
}
//    $peugeot = new Peugeot('peugeot');
//    $renault = new Renault('renault');

// $user = new User('test', 'test');
// $login = new Login($user);
// try {

//     $login->Login();
// }

// catch(UserException $e) {
// echo $e->getMessage() . $e->getCode();
// }

// catch(UserIsBanException $e) {
//     echo $e->getMessage();
// }
// // polimorphisme
// catch(\Exception $e) {
//     echo $e->getMessage();
// }
// finally {
//     echo 'finally';
// }
// $basicpdf = new BasicPdf();
// $premiumpdf = new PremiumPdf();
// var_dump($basicpdf->DownloadPfd());
// var_dump($renault->marque(test: 'test1'));
// $pdfdownloaderservice = new PdfDownloaderService();
// var_dump($pdfdownloaderservice->DownlodPDF($premiumpdf));

// $parentclass= new ParentClass();
// $childclass= new ChildClass();

// var_dump($parentclass->getName(), $childclass->getName())
// var_dump(ChildClass::getName(), ParentClass::getName())
// var_dump($parentclass->factory())

// $officereservation = new OfficeReservation('reservation pour le mois de janvier');
// $CoffeeMachine = new PremiumCoffeeMachine(5);
// $CoffeeMachine->select('vanilla');

// var_dump(officereservation::getInstance());
// var_dump(officereservation::getInstance());
// var_dump(officereservation::getInstance());






// $status = 'en attente';


// $reservation = new Reservation();

// if(OfficeStatus::APPROVAL_PENDING === $reservation->status) 
// echo 'en attente !!';

// var_dump($reservation)
 ?>