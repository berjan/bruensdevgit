<?php

namespace Bruens\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('BruensHelloBundle:Default:index.html.twig', array('name' => $name));
    }
}
