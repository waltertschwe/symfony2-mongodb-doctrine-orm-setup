<?php

namespace Story\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// Story Model
use Story\AdminBundle\Document\Story;

// Generic Page Form
use Story\AdminBundle\Form\Type\PageType;

class PageController extends Controller {
	
	public function indexAction($storyId) {
		
		$repository = $this->get('doctrine_mongodb')
	        ->getManager()
	        ->getRepository('StoryAdminBundle:Story');
		
		$story = $repository->findOneBy(array('_id' => $storyId));
		
		var_dump($story);
		 
		return $this->render('StoryAdminBundle:Page:page.index.html.twig');
	}
	
	public function createAction($storyId) {
			
		$repository = $this->get('doctrine_mongodb')
	        ->getManager()
	        ->getRepository('StoryAdminBundle:Story');
		
		$story = $repository->findOneBy(array('_id' => $storyId));
		
		$page = new Page();
		$form = $this->createForm(new StoryType(), $story);	
		$form->handleRequest($this->getRequest());

		 
		return $this->render('StoryAdminBundle:Page:page.create.html.twig');	
	}
	
	public function updateAction(Request $request) {
		
	}
	
	public function deleteAction(Request $request) {
		
	}
	
	
}