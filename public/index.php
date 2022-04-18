
<?php

// use Class\Enums\OfficeStatus;
// use Class\OfficeReservation;
// use Class\Reservation;
// use Class\CoffeeMachine;
// use Class\PremiumCoffeeMachine;

// use Class\Peugeot;
// use Class\Renault;
// use Class\Vehicule;

use Class\BasicPdf;

require '../vendor/autoload.php'; 
//    $peugeot = new Peugeot('peugeot');
//    $renault = new Renault('renault');

$basicpdf = new BasicPdf();
var_dump($basicpdf->DownloadPfd());
// var_dump($renault->marque(test: 'test1'));


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

