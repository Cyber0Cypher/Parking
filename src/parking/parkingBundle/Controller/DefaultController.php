<?php

namespace parking\parkingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('parkingparkingBundle:Default:index.html.twig', array('name' => $name));
    }
}
