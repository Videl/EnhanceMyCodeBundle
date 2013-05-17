<?php

namespace Videl\PublishMyCodeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PublishMyCodeBundle:Default:index.html.twig', array('name' => $name));
    }
}
