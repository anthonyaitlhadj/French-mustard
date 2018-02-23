<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConceptController extends Controller
{
    /**
     * @Route("/concept")
     */
    public function conceptAction()
    {
        return $this->render('Concept/concept.html.twig', array(
            // ...
        ));
    }

}
