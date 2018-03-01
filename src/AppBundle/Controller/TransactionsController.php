<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Transactions;
use AppBundle\Form\InsertTransactions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class TransactionsController extends Controller
{
    /**
     * @Route("/transaction")
     */
    public function saveAction(Request $request)
    {
        $transactions = new Transactions();

        $form = $this -> createForm(InsertTransactions::class, $transactions);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($transactions);
            $em->flush();
        }

        return $this->render('AppBundle:Transactions:save.html.twig', array(
            'form' => $form -> createView(), 'transaction' => $transactions
        ));
    }

}
