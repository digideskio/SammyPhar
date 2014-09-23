<?php

// Controllers 


// Register routes.
$app->get('/', 'Sammyphar\Controller\MedocController::indexAction')
   ->bind('homepage');

$app->match('/addMedocForm', 'Sammyphar\Controller\MedocController::addMedocFormAction')
   ->bind('addMedocForm');
$app->post('/addMedoc', 'Sammyphar\Controller\MedocController::addMedocAction')
   ->bind('addMedoc');
$app->get('/viewCsv', 'Sammyphar\Controller\MedocController::viewCsvAction')
   ->bind('viewCsv');
$app->post('/addCsv', 'Sammyphar\Controller\MedocController::addCsvAction')
   ->bind('addCsv');