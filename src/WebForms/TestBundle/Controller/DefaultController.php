<?php

namespace WebForms\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use WebForms\TestBundle\Entity\Task;
use WebForms\TestBundle\Document\MongoTest;


class DefaultController extends Controller {
    	
    public function indexAction($name) {
        return $this->render('WebFormsTestBundle:Default:index.html.twig', array('name' => $name));
    }
	
	 public function newAction(Request $request) {
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Learn Symfony2 Forms');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', 'text', array('max_length' => '45', 'attr' => array('size' => '45')))
			->add('textArea', 'textarea', array('required' => true))
            ->add('dueDate', 'date')
			->add('email', 'email', array('required' => false, 'label' => 'email address'))
			->add('integer', 'integer', array('required' => false, 'label' => 'integer text field'))
			->add('money', 'money', array('required' => false, 'label' => 'money text field'))
			->add('number', 'number', array('required' => false, 'label' => 'number text field'))
			->add('password', 'password', array('required' => false, 'label' => 'the password field'))
			->add('percent', 'percent', array('required' => false, 'label' => 'percent text field'))
			->add('search', 'search', array('required' => false, 'label' => 'search field'))
			->add('url', 'url', array('required' => false, 'label' => 'url text field adds http'))
            ->add('save', 'submit')
            ->getForm();
			
		$form->handleRequest($request);
		if ($form->isValid()) {
        	// perform some action, such as saving the task to the database
			return $this->redirect($this->generateUrl('web_forms_task_success'));
    	}

        return $this->render('WebFormsTestBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
	
	public function successAction() {
		return $this->render('WebFormsTestBundle:Default:success.html.twig');
	} 

    public function mongoAction() {
 
	    $product = new MongoTest();
	    $product->setName('A Foo Bar');
	    $product->setPrice('19.99');
	
	    $dm = $this->get('doctrine_mongodb')->getManager();
	    $dm->persist($product);
	    $dm->flush();
	
	    return new Response('Created product id '.$product->getId());

    }

	 
	 
	 
}