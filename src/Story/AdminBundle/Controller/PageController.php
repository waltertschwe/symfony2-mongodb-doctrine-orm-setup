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
            'form' => $form->createView(),
			'story' => $storyArr)
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
		
		$pageData = $pages[$pageKey];
		$form = $this->createForm(new PageType(), $pageData);	
		
		if ($request->getMethod() == 'POST') {
			 $form->submit($request);
			 ## page data
   			 $data = $form->getData();
			 var_dump($data);
			 $dm = $this->get('doctrine_mongodb')->getManager();
			 
			 echo "<br/>page Number = " . $pageNumber;
			 echo "<br/> storyId = " . $storyId;
			 
			 /*
			 $result = $dm->createQueryBuilder('StoryAdminBundle:Story')
				->update()
				->field('pages')->set('pages.pageNumber', $data)
			    ->field('id')->equals($storyId)
			    ->getQuery()
		        ->execute();	
			*/
			$story = $dm->createQueryBuilder('StoryAdminBundle:Story')
    			->field('id')->equals($storyId)
    			->getQuery()
    			->getSingleResult();
				
			$pages = $story->getPages();
			var_dump($pages);
			
				
			$this->get('session')->getFlashBag()->add(
            	'notice',
            	'Page Information Updated!'
       		); 
			
			//return $this->redirect($this->generateUrl('page_admin_story_index'), array(
			//			'storyId' => $storyId));	
		}
		  
		return $this->render('StoryAdminBundle:Page:page.update.html.twig', array(
			'form' => $form->createView()));	
		
	}
	
	public function deleteAction(Request $request) {
		
	}
	
	
}