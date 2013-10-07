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
		
		
		$newPageNumber  = $this->getRequest()->get('newPageNumber');
		$pageArr = array();
		$pageArr['pageNumber'] = $newPageNumber;
		
		$form = $this->createForm(new PageType(), $pageArr);	
		
		$form->handleRequest($this->getRequest());
		if ($form->isValid()) {
			$storyId = $this->getRequest()->get('storyId');
			$storyObj = $repository->findOneById($storyId);
   			$data = $form->getData();
			
    		$dm = $this->get('doctrine_mongodb')->getManager();
			
			$result = $dm->createQueryBuilder('StoryAdminBundle:Story')
				->update()
				->field('pages')->push($data)
			    ->field('id')->equals($storyId)
			    ->getQuery()
		        ->execute();
					
		}
		 
		return $this->render('StoryAdminBundle:Page:page.create.html.twig', array(
            'form' => $form->createView())
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
		
		/*
		if ($pageKey >= 0) {
			echo "pageFound = " . $pageKey . "<br/>";
		} else {
			echo "page Not Found<br/>";
		}
		
		 * 
		 */
		$pageData = $pages[$pageKey];
		var_dump($pageData);
		
		//$form = $this->createForm(new PageType(), $pageArr);	
		  
		return $this->render('StoryAdminBundle:Page:page.update.html.twig'
			);	
		
	}
	
	public function deleteAction(Request $request) {
		
	}
	
	
}