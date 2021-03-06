<?php
namespace Sammyphar\Controller;

use Silex\Application;
use Sammyphar\Form\MedocType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

class MedocController 
{
	public function indexAction(Request $request , Application $app)
	{
		$limit = 0;
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
		return $app->redirect('homepage');
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

	public function viewMedocAction(Request $request, Application $app)
	{
		$medoc = $request->attributes->get('medoc');
		if (!$medoc) {
            $app->abort(404, 'The requested medoc was not found.');
        }
        $form = $app['form.factory']->createBuilder(new MedocType(),$medoc)
	        ->getForm();
        //$form = $app->form['form.factory']->createBuilder('form', new MedocType())->getForm();
		return $app['twig']->render(
			'modifyMedoc.html.twig',
			array(
				'form'  => $form->createView(),
				'medoc' => $medoc
				)
			);
	}

	public function modifyMedocAction(Request $request, Application $app)
	{
		$medoc = $request->attributes->get('medoc');
		$form = $app['form.factory']->createBuilder(new MedocType(),$medoc)
	        ->getForm();
	    $form->handleRequest($request);
	    if($form->isValid())
	    {
	    	$data = $form->getData;
	    	$medoc->setName($data['name']);
	    	$medoc->setPrice($data['price']);
	    	$app['repository.medoc']->update($medoc);
	    }
		if (!$medoc) {
            $app->abort(404, 'The requested medoc was not found.');
        }
	}

	public function deleteMedocAction(Request $request, Application $app)
	{
		$medoc = $request->attributes->get('medoc');
		$app['repository.medoc']->delete($medoc);

		return $app->redirect('homepage');
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