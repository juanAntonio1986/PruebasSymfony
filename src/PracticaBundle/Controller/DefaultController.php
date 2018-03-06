<?php

namespace PracticaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use PracticaBundle\Entity\Usuario;
use PracticaBundle\Entity\Tasca;
use PracticaBundle\Entity\Subtasca;
use PracticaBundle\Form\UsuarioType;
use PracticaBundle\Form\TascaType;
use PracticaBundle\Form\SubtascaType;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PracticaBundle:Default:index.html.twig');
    }


       public function formUsuarioAction(Request $request){
       		$usuario = new usuario();
		$form = $this->createForm(UsuarioType::class,$usuario);
		
		$form->handleRequest($request);

			if($form->isValid()){
				$status = "Formulario válido";
				$data = array(
					"nom" => $form->get("nom")->getData(),
					"password" => $form->get("password")->getData()
					
				);
			}else{
				$status = null;
				$data = null;
			}
		
    		
             return $this->render('PracticaBundle:Default:formusuari.html.twig',array(
             	'form' => $form->createView(),
             	'status' => $status,
				'data' => $data


             	));
   
    }


           public function formTascaAction(Request $request){
       		$tasca = new tasca();
		$form = $this->createForm(TascaType::class,$tasca);
		
		$form->handleRequest($request);
    		
             return $this->render('PracticaBundle:Default:formtasca.html.twig',array(
             	'form' => $form->createView()


             	));
   
    }


           public function formSubtascaAction(Request $request){
       		$subtasca = new subtasca();
		$form = $this->createForm(SubtascaType::class,$subtasca);
		
		$form->handleRequest($request);

	    		
             return $this->render('PracticaBundle:Default:formsubtasca.html.twig',array(
             		  'form' => $form->createView(),
					


             	));
   
    }


}
