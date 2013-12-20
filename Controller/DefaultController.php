<?php

namespace Videl\PublishMyCodeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PublishMyCodeBundle:Display:index.html.twig',
        	array(
        		'salut' => "Test la var"
        		)
        	);
    }
}
