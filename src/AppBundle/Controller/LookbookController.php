<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LookbookController extends Controller
{
    /**
     * @Route("/lookbook")
     */
    public function lookbookAction()
    {
        return $this->render('Lookbook/lookbook.html.twig', array(
            // ...
        ));
    }

}
