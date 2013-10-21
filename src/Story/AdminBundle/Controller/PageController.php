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
	
	public function indexAction(Request $request) {
		
		$storyId = $this->getRequest()->get('storyId');
		
		$repository = $this->get('doctrine_mongodb')
	        ->getManager()
	        ->getRepository('StoryAdminBundle:Story');
		
		$story = $repository->findOneBy(array('_id' => $storyId));
		
		// Get Next Page that doesn't exist for creation
		$pages = $story->getPages();
		if(empty($pages)) {
			$newPageNum = 1;
		} else {
			$pageCount = count($pages);
			$pageCount++;
			$newPageNum = $pageCount;
		}
		
		$pageArr = array();
		$pageArr['newPageNumber'] = $newPageNum;
	
		return $this->render('StoryAdminBundle:Page:page.index.html.twig', array(
				'story' => $story,
				'page' => $pageArr));
	}
	
	public function createAction(Request $request) {
		
		$storyId = $this->getRequest()->get('storyId');
		$newPageNumber  = $this->getRequest()->get('newPageNumber');
			
		$repository = $this->get('doctrine_mongodb')
	        ->getManager()
	        ->getRepository('StoryAdminBundle:Story');
		
		$storyArr = array();
		$storyArr['storyId'] = $storyId;
		
		$pageArr = array();
		$pageArr['pageNumber'] = $newPageNumber;
			
		$form = $this->createForm(new PageType(), $pageArr);	
		$form->handleRequest($this->getRequest());
		
		if ($form->isValid()) {
			$data = $form->getData();
			$storyId = $this->getRequest()->get('storyId');
			$storyObj = $repository->findOneById($storyId);
			$pages = $storyObj->getPages();
			if(empty($pages)) {
				$storyObj->setPages(array($data));
			} else {
				array_push($pages, $data);		
				$storyObj->setPages($pages);
			}
			
    		$dm = $this->get('doctrine_mongodb')->getManager();
			//$dm->persist($storyObj);
	    	//$dm->flush();
						
		}
		 
		return $this->render('StoryAdminBundle:Page:page.create.html.twig', array(
            'form' => $form->createView(),
			'story' => $storyArr)
		);	
	}
	
	public function updateAction(Request $request) {
		
		$storyId = $this->getRequest()->get('storyId');
		$selectedPageNumber  = $this->getRequest()->get('pageNumber');

		$repository = $this->get('doctrine_mongodb')
	        ->getManager()
	        ->getRepository('StoryAdminBundle:Story');
		
		$story = $repository->findOneBy(array('_id' => $storyId));
		// pages php array 
		$pages = $story->getPages();
		
		foreach ($pages as $key => $value) {
		    foreach ($value as $k2 => $v2) {	
				if($k2 == "pageNumber") {
					if($v2 == $selectedPageNumber) {
						$pageKey = $key;
						break 2;
					}				
				}
			} 
		}
		
		$pageData = $pages[$pageKey];
		$form = $this->createForm(new PageType(), $pageData);	
		
		if ($request->getMethod() == 'POST') {
			$form->submit($request);
			## form data
   			$data = $form->getData(); 
			$dm = $this->get('doctrine_mongodb')->getManager();
			  
			$storyObj = $dm->createQueryBuilder('StoryAdminBundle:Story')
    			->field('id')->equals($storyId)
    			->getQuery()
    			->getSingleResult();
			
			$pages = $storyObj->getPages();
			$currentPage = $data['pageNumber'];
			
			foreach ($pages as $key => $value) {
			    foreach ($value as $k2 => $v2) {	
					if($k2 == "pageNumber") {
						if($v2 == $currentPage) {
							$pageKey = $key;
							unset($pages[$pageKey]);
							$pages[$pageKey] = $data;
							break 2;
						}				
					}
				} 
			}
			
			
			$storyObj->setPages($pages);
			$dm->persist($storyObj);
	    	$dm->flush();
			
			$this->get('session')->getFlashBag()->add(
            	'notice',
            	'Page Information Updated!'
       		);
			

		}
		  
		return $this->render('StoryAdminBundle:Page:page.update.html.twig', array(
			'form' => $form->createView(), 'storyId' => $storyId));	
		
	}
	
	public function deleteAction(Request $request) {
		
		$storyId = $this->getRequest()->get('storyId');
		$pageNumberToDelete  = $this->getRequest()->get('pageNumber');
						
		$storyId = $this->getRequest()->get('storyId');
		$dm = $this->get('doctrine_mongodb')->getManager();
		$story = $dm->getRepository('StoryAdminBundle:Story')->findOneById($storyId);
		
		$pages = $story->getPages();
		
		foreach ($pages as $key => $value) {
		    foreach ($value as $k2 => $v2) {	
				if($k2 == "pageNumber") {
					if($v2 == $pageNumberToDelete) {
						$pageKey = $key;
						unset($pages[$pageKey]);
						break 2;
					}				
				}
			} 
		}
		
		$story->setPages($pages);
		$dm->persist($story);
	    $dm->flush();
		
		return $this->forward('StoryAdminBundle:Page:index', array('storyId' => $storyId));
		
	}
}