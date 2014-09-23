<?php
namespace Sammyphar\Controller;

use Silex\Application;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

class MedocController 
{
	public function indexAction(Request $request, Application $app)
	{
		include_once 'csv.php';
    	return $app['twig']->render('medocs.html.twig', array(
        	'medocs' => $tableau,
    	));
	}
	
	public function addAction(Request $request, Application $app)
	{
		
	}
}