<?php

namespace Story\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Story\AdminBundle\Document\Story;

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
	    //$story->setStoryName('Tim and the Witch of Iceland');
		
		$form = $this->createFormBuilder($story)
			->add('storyName', 'text', array('max_length' => '45', 'attr' => array('size' => '45')))
			->add('author', 'text')
			->add('description', 'textarea')
			->add('save', 'submit')
	        ->getForm();
	    
		$form->handleRequest($this->getRequest());

		// Form submitted
    	if ($form->isValid()) {
    		
			$dm = $this->get('doctrine_mongodb')->getManager();
	 		$dm->persist($story);
	    	$dm->flush();
	    	$this->get('session')->getFlashBag()->add(
            	'notice',
            	'Your changes were saved!'
       		);
			  
    		return $this->redirect($this->generateUrl('story_admin_story_homepage'));
			
		}
	    
		// generate the create form
        return $this->render('StoryAdminBundle:Story:story.create.html.twig', array(
            'form' => $form->createView(),
        ));
    }
	public function updateAction($storyId) {
		return $this->render('StoryAdminBundle:Story:story.update.html.twig', array('storyId' => $storyId));
	}
	public function deleteAction($storyId) {
		return $this->render('StoryAdminBundle:Story:story.delete.html.twig', array('storyId' => $storyId));
	}
	
	

}