<?php

namespace gestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use gestionBundle\Entity\Sejour;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('gestionBundle:Default:index.html.twig');
    }
	
	public function consulterSejourAction()
	{
		$doctrine=$this->getDoctrine();
		$entityManager=$doctrine->getManager();
		$repository=$entityManager->getRepository('gestionBundle:Sejour');
		$lesSejours=$repository->findAll();
		return $this->render('gestionBundle:default:consulterSejour.html.twig',array('lesSejours'=>$lesSejours));
	}
	
	public function ajouterSejourAction(Request $request)
	{
		$unSejour = new Sejour();
		$formBuilder=$this->createFormBuilder($unSejour);
		$formBuilder->add('dateDebut','date');
		$formBuilder->add('dateFin','date');
		$formBuilder->add('Patient','entity',array('class'=>'gestionBundle:Patient','property'=>'nom','multiple'=>true,'expanded'=>true));
		$formBuilder->add('save','submit');
		
		$form=$formBuilder->getForm();
		
		$form->bind($request);
		if($form->isValid())
		{
		$em=$this->getDoctrine()->getManager();
		$em->persist($unAdherents);
		$em->flush();
		}
		return $this->render('MaisonLiguesPingPongBundle:Default:ajouterSejour.html.twig',array('form'=>$form->createView()));
	}
}
