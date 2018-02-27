<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomepageController extends Controller
{
    /**
     * @Route("/")
     */
    public function showAction()
    {
        return $this->render('Homepage/homepage.html.twig', array(
            // ...
        ));
    }

}
