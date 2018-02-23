<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class AuthentificationController extends Controller
{
    /**
     * @Route("/register")
     */
    public function registerAction(Request $request)
    {
        $user = new Users();
        $form = $this->createForm(Users::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

        }

        return $this->render('AppBundle:Authentification:register.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
