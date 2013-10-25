<?php

namespace StoryView\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// Page Navigation Form
use StoryView\FrontEndBundle\Form\Type\PageNavigatorType;

class StoryRouterController extends Controller
{
    public function storyHomeAction(Request $request)
    {
    	
		$homePageNumber = 0;
		$nextPageNumber = 1;
		$repository = $this->get('doctrine_mongodb')
	        ->getManager()
	        ->getRepository('StoryAdminBundle:Story');
			
		$storyId = $this->getRequest()->get('storyId');
		
		$storyObj = $repository->findOneById($storyId);
		$storyName = $storyObj->getStoryName();
		
		
		$pages = $storyObj->getPages();
		
		$pageOne = $pages[0];
		
		$pageOne['storyId'] = $storyId;
		$pageOne['storyName'] = $storyName;
	
		$formData = array('next-page' => $nextPageNumber);
		$form = $this->createForm(new PageNavigatorType(), $formData);	
		
		if (isset($pageOne['choice'])) {
			## TODO: page 1 has a choice
			
		} else {
			$pageOne['nextPage'] = 1;
		}
		
        return $this->render('StoryViewFrontEndBundle:StoryRouter:home.html.twig', array(
		 		'pageOne' => $pageOne,
				'form' => $form->createView()
				));
    }
	
	
	public function pagesRouterAction(Request $request) {
		
		$storyId = $this->getRequest()->get('storyId');
		
		$repository = $this->get('doctrine_mongodb')
	        ->getManager()
	        ->getRepository('StoryAdminBundle:Story');
			
		$storyObj = $repository->findOneById($storyId);
		
		$pages = $storyObj->getPages();
		
		//$currentPageData = $pages[$]
		
		if ($request->getMethod() == 'POST') {
			echo "begin routing pages...<br/>";
			//$form->bindRequest($request);
		}
	}
	
}
