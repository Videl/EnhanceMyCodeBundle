<?php

namespace Videl\PublishMyCodeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('PublishMyCodeBundle:Post')->findAll();
        return $this->render('PublishMyCodeBundle:Display:index.html.twig',
        	array(
        		'posts' => $entities
        		)
        	);
    }
}
