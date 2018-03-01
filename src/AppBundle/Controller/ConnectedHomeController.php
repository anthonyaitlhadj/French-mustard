<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConnectedHomeController extends Controller
{
    /**
     * @Route("/home")
     */
    public function showAction()
    {
        return $this->render('AppBundle:ConnectedHome:show.html.twig', array(
            // ...
        ));
    }

}
