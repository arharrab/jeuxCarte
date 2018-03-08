<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class SecurityController extends Controller {

    public function loginAction(Request $request) {

        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUseremail = $authenticationUtils->getLastUsername();

        if ($request->getMethod() == "POST") {

            $email = $request->get("useremail");
            $pwd = $request->get("password");

            $em = $this->getDoctrine()->getManager();
            $joueurRepository = $em->getRepository('AppBundle:Joueur');
            $loginJoueur = $joueurRepository->findOneBy(array('email' => $email, 'password' => $pwd));
            if ($loginJoueur)
            {
                $session = $request->getSession();

                $session->set('JoueurNom', $loginJoueur->getNom());
                $session->set('JoueurID', $loginJoueur->getId());
                
                return $this->redirectToRoute('party_home');
                //return $this->render("AppBundle:Default:index.html.twig", array('joueur_name' => $loginJoueur->getNom(), 'joueur_id' => $loginJoueur->getId()));
            } else {
                return $this->render('security/login.html.twig', array(
                            'last_useremail' => $lastUseremail,
                            'error' => $error,
                ));
            }
        } else {

            return $this->render('security/login.html.twig', array(
                        'last_useremail' => $lastUseremail,
                        'error' => $error,
            ));
        }
    }
    
    
    public function logoutAction(Request $request) {
        $session = $request->getSession();
        $session->remove('JoueurNom');
        $session->remove('JoueurID');
        
        $session->clear();
        
        $lastUseremail='';
        $error='';
                
        return $this->render('security/login.html.twig', array(
                        'last_useremail' => $lastUseremail,
                        'error' => $error,
            ));
        
    }

}
