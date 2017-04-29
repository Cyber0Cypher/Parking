<?php

namespace parking\parkingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Parking\parkingBundle\Entity\Utilisateur;

class ParkingController extends Controller
{
    public function indexAction()
    {
        return $this->render('parkingparkingBundle:Parking:index.html.twig');
    }

    public function loginAction()
    {
    	$connexion = null;

    	$formBuilder = $this->createFormBuilder($connexion)
    	->add('mail', 'email', array('label' => 'Adresse Mail '))
    	->add('password', 'password', array('label' => 'Mot de Passe '))
    	->add('Se connecter', 'submit');

    	$form = $formBuilder->getForm();

    	return $this->render('parkingparkingBundle:Parking:login.html.twig', array ('form' => $form->createView()));
    }

    public function signupAction()
    {
    	$utilisateur = new Utilisateur();

    	$formBuilder = $this->createFormBuilder($utilisateur)
    	->add('nom','text', array('label' => 'Nom : '))
    	->add('prenom','text', array('label' => 'Prénom : '))
    	->add('mail', 'email', array('label' => 'Adresse Mail : '))
    	->add('password', 'text', array('label' => 'Mot de Passe : '))
    	->add('password2', 'text', array('label' => 'Confirmer Mot de Passe : '))
    	->add('Envoyer la demande', 'submit');

    	$form = $formBuilder->getForm();

    	$request = $this->get('request');

    	if($request->getMethod() == 'POST'){
    		$form->bind($request);

    		if ($form->isValid()){
    			$em = $this->getDoctrine()->getManager();
    			$em = $this->persist($abonne);
    			$em->flush();

    			return $this->redirect($this->generateUrl('parkingparking_login'));
    		}
    	}

    	return $this->render('parkingparkingBundle:Parking:signup.html.twig', array ('form' => $form->createView()));
    }
}
