<?php

// Controllers 


// Register routes.
$app->get('/', 'Sammyphar\Controller\MedocController::indexAction')
   ->bind('homepage');

$app->get('/add', 'Sammyphar\Controller\MedocController::addAction')
   ->bind('add');
