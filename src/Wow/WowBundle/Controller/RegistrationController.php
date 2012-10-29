<?php

namespace Wow\WowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Wow\WowBundle\Form\RegistrationType;
use Wow\WowBundle\Entity\Registration;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormError;
class RegistrationController extends Controller
{
    
    public function indexAction(Request $request)
    {
      	$registration = new Registration();
   		$form = $this->createForm(new RegistrationType(), $registration);
   		$data = $request->request->get('registration');

   		if ($request->getMethod() == 'POST') {
	        $form->bindRequest($request);
         
        	if ($form->isValid()) {
	          
              $registration->setWorld($data['world']);
	            $registration->setLogin($data['login']);
	            $registration->setPwd($data['pwd']);
	            $registration->setPwd2($data['pwd2']);
	            $registration->setEmail($data['email']);
          
	    		$em = $this->getDoctrine()->getEntityManager();
    			$em->persist($registration);
    			$em->flush();
    		
        		return $this->render('WowWowBundle:Registration:index.html.twig', array(
                'form' => $form->createView(),
                'mesg' => 'Спасибо',
                 ));
               
            }
            if($data['pwd'] != $data['pwd2']){
              $form->get('pwd')->addError(new FormError('Пароли не совпадают'));
              $form->get('pwd2')->addError(new FormError('Пароли не совпадают'));
            }
          
            return $this->render('WowWowBundle:Registration:index.html.twig', array(
            'form' => $form->createView(),
            'mesg' => '',
            ));
	  	}
         return $this->render('WowWowBundle:Registration:index.html.twig', array(
            'form' => $form->createView(),
            'mesg' => '',
            ));
    }
}
