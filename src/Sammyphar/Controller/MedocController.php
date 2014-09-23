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
		$limit = 100;
		$offset = 0;
		$medocs = $app['repository.medoc']->findAll($limit, $offset);
		return $app['twig']->render('medocs.html.twig',array('medocs' => $medocs));
	}
	public function viewCsvAction(Application $app)
	{
		$tableau = $this->readCsvFile("medicaments2014.csv");

    	return $app['twig']->render('medocsCsvView.html.twig', array(
        	'medocs' => $tableau,
    	));
	}

	public function addCsvAction(Request $request, Application $app)
	{
		$tableau = $this->readCsvFile("medicaments2014.csv");
		foreach ($tableau as $medoc) {
			$app['repository.medoc']->save($medoc);
		}
		$app->redirect('homepage');
	}
	
	public function addMedocFormAction(Application $app)
	{
		$form = $app['form.factory']->createBuilder('form')
	        ->add('name')
	        ->add('price')
	        ->getForm();
	     // display the form
	    return $app['twig']->render('addForm.html.twig', array('form' => $form->createView()));
	}
	
	public function addMedocAction(Request $request, Application $app)
	{
	    $form = $app['form.factory']->createBuilder('form')
	        ->add('name')
	        ->add('price')
	        ->getForm();

	    $form->handleRequest($request);

	    if ($form->isValid()) {
	        $data = $form->getData();
	        $app['repository.medoc']->save($data);
	    }
	}

	private function readCsvFile($path)
	{
		$row = 1;
		$tableau = array();
		if (($handle = fopen($path, "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        //echo "<p> $num champs à la ligne $row: <br /></p>\n";
		        for ($c=0; $c < $num; $c++) {
		        	$explode = explode(';', $data[$c]);
		        	//var_dump($explode);
		            $tableau[$row]['name'] =  $explode[1];
		            $tableau[$row]['price'] =  $explode[2];
		            $tableau[$row]['date'] =  'NULL';
		            $tableau[$row]['sell'] =  'NULL';
		            $tableau[$row]['id'] =  'NULL';
		        }
        		$row++;
    		}
    		fclose($handle);

    		return $tableau;
		}
	}
}