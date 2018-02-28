<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Products;
use AppBundle\Form\AddProduct;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class AddProductController extends Controller
{
    /**
     * @Route("/Add/")
     */
    public function AddAction(Request $request)
    {
        $products = new Products();
        $form = $this->createForm(AddProduct::class, $products);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em -> persist($products);
            $em -> flush();

            return $this->redirectToRoute('login');
        }

        return $this->render('AppBundle:AddProduct:addProduct.html.twig', array(
            'form' => $form->createView(),
            'product' => $products
        ));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/showproduct")
     */
    public function ShowDataAction(Request $request)
    {
        $product = $this->getDoctrine()->getEntityManager()->getRepository('AppBundle:Products')->findAll();

        return $this->render('AppBundle:AddProduct:displayProduct.html.twig', ['products' => $product]);
    }

    /**
     * @Route("/showproduct/{id}")
     */
    public function DetailAction($id)
    {
        $product = $this->getDoctrine()->getEntityManager()->getRepository(Products::class)->findOneBy(['id' => $id]);

        return $this->render('AppBundle:AddProduct:detailProduct.html.twig', array(
            'product' => $product
        ));
    }

}
