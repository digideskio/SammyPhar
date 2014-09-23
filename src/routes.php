<?php

// Controllers 


// Register routes.
$app->get('/', 'Sammyphar\Controller\MedocController::indexAction')
   ->bind('homepage');

$app->match('/add', 'Sammyphar\Controller\MedocController::addAction')
   ->bind('add');
