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
        $json = $request->get('json', null);
        if ($json != null) {
            $params = json_decode($json);

            $email = (isset($params->email)) ? $params->email : null;
            $password = (isset($params->password)) ? $params->password : null;
            

            $email_constraint = new Assert\Email();
            $email_constraint->message = "El correo es Incorrecto";

            $validator_email = $this->get('validator')->validate($email,$email_constraint); 

            if (count($validator_email) == 0 && $password != null ) {
                 echo "Datos correctos";
                 die();
             }else{
                echo "Datos Incorrectos";
                die();
             } 

        }else{
            echo "no enviado nada";
            die();
        }
    }
    
}
