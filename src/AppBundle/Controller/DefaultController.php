<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

class DefaultController extends Controller
{
  
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user_repo = $em->getRepository('backendBundle:Usuario');
        $usuarios = $user_repo->findAll();
        return $this->json($usuarios);
        die();
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    public function loginAction(Request $request){
         //Llamamos al servicio de autenticacion
    $authenticationUtils = $this->get('security.authentication_utils');
     
    // conseguir el error del login si falla
    $error = $authenticationUtils->getLastAuthenticationError();
 
    // ultimo nombre de usuario que se ha intentado identificar
    $lastUsername = $authenticationUtils->getLastUsername();
       
    }
    
}
