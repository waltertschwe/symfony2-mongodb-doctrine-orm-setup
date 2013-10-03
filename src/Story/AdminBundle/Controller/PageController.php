<?php

namespace Story\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// Mongo DB Mappings
use Story\AdminBundle\Document\Story;

// Forms
use Story\AdminBundle\Form\Type\StoryType;
use Story\AdminBundle\Form\Type\PageType;

class PageController extends Controller {
	
	public function indexAction($storyId) {
		
		$repository = $this->get('doctrine_mongodb')
	        ->getManager()
	        ->getRepository('StoryAdminBundle:Story');
		
		$story = $repository->findOneBy(array('_id' => $storyId));
		
		return $this->render('StoryAdminBundle:Page:page.index.html.twig', array(
				'story' => $story));
	}
	
	public function createAction($storyId) {
			
		$repository = $this->get('doctrine_mongodb')
	        ->getManager()
	        ->getRepository('StoryAdminBundle:Story');
		
		$story = $repository->findOneBy(array('_id' => $storyId));
		
		$page = new Page();
		$form = $this->createForm(new PageType(), $page);	
		$form->handleRequest($this->getRequest());

		 
		return $this->render('StoryAdminBundle:Page:page.create.html.twig', array(
			'form' => $form->createView()
		));	
	}
	
	public function updateAction(Request $request) {
		
		$storyId = $this->getRequest()->get('storyId');
		$pageNumber  = $this->getRequest()->get('pageNumber');
		
		$repository = $this->get('doctrine_mongodb')
	        ->getManager()
	        ->getRepository('StoryAdminBundle:Story');
		
		$story = $repository->findOneBy(array('_id' => $storyId));
		
		// pages php array 
		$pages = $story->getPages();
		/*
		foreach($page as $pages) {
			if($page['pageNumber'] == $pageNumber) {
				echo "found a pageNumber";
			}
		}
		 * 
		 */
		
		
		return $this->render('StoryAdminBundle:Page:page.update.html.twig'
			);	
		
	}
	
	public function deleteAction(Request $request) {
		
	}
	
	
}