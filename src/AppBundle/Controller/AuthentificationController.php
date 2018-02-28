<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Users;
use AppBundle\Form\UserLogin;
use AppBundle\Form\UserRegistration;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthentificationController extends Controller
{
    /**
     * @Route("/register")
     *
     */
    public function registerAction(Request $request)
    {
        $users = new Users();
        $form = $this->createForm(UserRegistration::class, $users);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()){
            $password = $this->get('security.password_encoder')
                ->encodePassword($users, $users->getPassword());
            $users->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em -> persist($users);
            $em -> flush();

            return $this->redirectToRoute('login');
        }


        return $this->render('AppBundle:Authentification:register.html.twig', array(
            'form' => $form->createView(),
            'user' => $users
        ));
    }

    /**
     * @Route("/login")
     *
     */

    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
    {
        $users = new Users();
        $form = $this->createForm(UserLogin::class, $users);
        $lastUsername = $authenticationUtils->getLastUsername();

        $form->handleRequest($request);



        return $this->render('AppBundle:Authentification:login.html.twig', array(
            'last_username' => $lastUsername,
            'form' => $form->createView(),
        ));
    }

}
