<?php
namespace Sammyphar\Controller;

use Silex\Application;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

class MedocController 
{
	public function indexAction(Request $request , Application $app)
	{
		$limit = 20;
		$offset = 0;
		$medocs = $app['repository.medoc']->findAll($limit, $offset);
		return $app['twig']->render('medocs.html.twig',array('medocs' => $medocs));
	}
	public function csvAction(Request $request, Application $app)
	{
		include_once 'csv.php';
    	return $app['twig']->render('medocs.html.twig', array(
        	'medocs' => $tableau,
    	));
	}
	
	public function addAction(Request $request, Application $app)
	{
		
	    // some default data for when the form is displayed the first time
	    $data = array(
	        'name' => 'Your name',
	        'email' => 'Your email',
	    );

	    $form = $app['form.factory']->createBuilder('form')
	        ->add('name')
	        ->add('quantity')
	        ->add('price')
	        ->getForm();

	    $form->handleRequest($request);

	    if ($form->isValid()) {
	        $data = $form->getData();
	        var_dump($data);
	        // do something with the data

	        // redirect somewhere
	        return $app->redirect('...');
	    }

	    // display the form
	    return $app['twig']->render('addForm.html.twig', array('form' => $form->createView()));
	}
		
}