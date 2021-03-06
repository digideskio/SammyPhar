<?php

// Controllers 
$app['controllers']->convert('medoc', function ($id) use ($app) {
    if ($id) {
        return $app['repository.medoc']->find($id);
    }
});

// Register routes.
$app->match('/', 'Sammyphar\Controller\MedocController::indexAction')
   ->bind('homepage');

$app->match('/addMedocForm', 'Sammyphar\Controller\MedocController::addMedocFormAction')
   ->bind('addMedocForm');
$app->post('/addMedoc', 'Sammyphar\Controller\MedocController::addMedocAction')
   ->bind('addMedoc');
$app->get('/viewCsv', 'Sammyphar\Controller\MedocController::viewCsvAction')
   ->bind('viewCsv');
$app->post('/addCsv', 'Sammyphar\Controller\MedocController::addCsvAction')
   ->bind('addCsv');
$app->get('/viewMedoc/{medoc}', 'Sammyphar\Controller\MedocController::viewMedocAction')
   ->bind('viewMedoc');
$app->post('/modifyMedoc/{medoc}', 'Sammyphar\Controller\MedocController::viewMedocAction')
   ->bind('modifyMedoc');
$app->get('/deleteMedoc/{medoc}', 'Sammyphar\Controller\MedocController::deleteMedocAction')
   ->bind('deleteMedoc');