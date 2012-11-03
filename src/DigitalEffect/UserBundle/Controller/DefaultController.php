<?php

namespace DigitalEffect\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DigitalEffectUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
