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
		
		// Get Next Page that doesn't exist for creation
		$pages = $story->getPages();
		$newPageNum = count($pages);
		$newPageNum++;
		
		$pageArr = array();
		$pageArr['newPageNumber'] = $newPageNum;
		
		return $this->render('StoryAdminBundle:Page:page.index.html.twig', array(
				'story' => $story,
				'page' => $pageArr));
	}
	
	public function createAction(Request $request) {
			
		$repository = $this->get('doctrine_mongodb')
	        ->getManager()
	        ->getRepository('StoryAdminBundle:Story');
		
		$form = $this->createForm(new PageType());	
		
		 
		return $this->render('StoryAdminBundle:Page:page.create.html.twig' 
		);	
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
		
		$pageCounter = 0;
		$pageKey = -1;
		foreach($pages as $page) {
			if($page['pageNumber'] == $pageNumber) {
				$pageKey = $pageCounter;
				break;
			}
			$pageCounter++;
		}
		
		if ($pageKey >= 0) {
			echo "pageFound = " . $pageKey . "<br/>";
		} else {
			echo "page Not Found<br/>";
		}
		
		var_dump($pages);
		//echo "page Data = " . $pages[$pageKey];
		
		  
		return $this->render('StoryAdminBundle:Page:page.update.html.twig'
			);	
		
	}
	
	public function deleteAction(Request $request) {
		
	}
	
	
}