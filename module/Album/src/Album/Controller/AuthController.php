<?php
namespace Album\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Form\Element;
use Zend\Form\Form;
class AuthController extends AbstractActionController{
	
	
	public function indexAction(){
		$form = $this->createForm();
		return array('formAuth'=>$form);
	}
	protected function createForm(){
		
		$login = new Element('login');
		$login->setLabel('Votre id');
		$login->setAttribute('type', 'text');
		
		$form = new Form('identification');
		$form->add($login);
		return $form;
	}
}