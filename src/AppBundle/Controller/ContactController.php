<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Messageries;
use AppBundle\Form\UserContact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    /**
     * @Route("/contact")
     */
    public function messagerieAction(Request $request)
    {
        $messageries = new Messageries();

        $form = $this -> createForm(UserContact::class, $messageries);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($messageries);
            $em->flush();
        }

        return $this->render('Contact/messagerie.html.twig', array(
            'form' => $form -> createView(), 'messagerie' => $messageries
        ));
    }

}
