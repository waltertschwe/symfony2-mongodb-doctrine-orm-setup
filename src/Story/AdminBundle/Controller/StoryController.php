<?php

namespace Story\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// Story Model
use Story\AdminBundle\Document\Story;

// Generic Story Form
use Story\AdminBundle\Form\Type\StoryType;

class StoryController extends Controller {
	
	public function indexAction() {
		
		$repository = $this->get('doctrine_mongodb')
	        ->getManager()
	        ->getRepository('StoryAdminBundle:Story');
		
		$stories = $repository->findAll();
		
		return $this->render('StoryAdminBundle:Story:story.index.html.twig', array(
				'stories' => $stories));
	}
    public function createAction(Request $request) {
    	
		$story = new Story();
		$form = $this->createForm(new StoryType(), $story);	
		$form->handleRequest($this->getRequest());

		// Form submitted
    	if ($form->isValid()) {
    		
			$dm = $this->get('doctrine_mongodb')->getManager();
	 		$dm->persist($story);
	    	$dm->flush();
	    	$this->get('session')->getFlashBag()->add(
            	'notice',
            	'Story Created!!!'
       		);
			  
    		return $this->redirect($this->generateUrl('story_admin_story_homepage'));
			
		}
	    
		// generate the create form
        return $this->render('StoryAdminBundle:Story:story.create.html.twig', array(
            'form' => $form->createView(),
        ));
    }
	public function updateAction(Request $request) {
		
		$request = $this->get('request');
		$repository = $this->get('doctrine_mongodb')
	        ->getManager()
	        ->getRepository('StoryAdminBundle:Story');
			
		$storyId = $this->getRequest()->get('storyId');
		$storyObj = $repository->findOneById($storyId);
		
		// create story array to pass to form
		$storyArr = array();
		$storyArr['id'] = $storyObj->getId();
		$storyArr['storyName'] = $storyObj->getStoryName();
		$storyArr['author'] = $storyObj->getAuthor();
		$storyArr['description'] = $storyObj->getDescription();
		$form = $this->createForm(new StoryType(), $storyArr);	
			
		if ($request->getMethod() == 'POST') {
			 $form->submit($request);
   			 $data = $form->getData();
			 $storyObj->setStoryName($data['storyName']);
			 $storyObj->setAuthor($data['author']);
			 $storyObj->setDescription($data['description']);
			 $dm = $this->get('doctrine_mongodb')->getManager();
	 		 $dm->persist($storyObj);
	    	 $dm->flush();
	    	 $this->get('session')->getFlashBag()->add(
            	'notice',
            	'Your changes were updated!'
       		);
			
			return $this->redirect($this->generateUrl('story_admin_story_homepage'));	
		} 
		
		return $this->render('StoryAdminBundle:Story:story.update.html.twig', array(
			'form' => $form->createView()
		));
	}
	public function deleteAction(Request $request) {
		
		$request = $this->get('request');
		$repository = $this->get('doctrine_mongodb')
	        ->getManager()
	        ->getRepository('StoryAdminBundle:Story');
			
		$storyId = $this->getRequest()->get('storyId');
		return $this->render('StoryAdminBundle:Story:story.delete.html.twig', array('storyId' => $storyId));
	}
	
	

}