<?php

namespace StoryView\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// FORMS 
use StoryView\FrontEndBundle\Form\Type\SimplePageType;
use StoryView\FrontEndBundle\Form\Type\ChoicePageType;

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
		
		
		if (isset($pageOne['choice'])) {
			## TODO: page 1 has a choice
			$form = $this->createForm(new ChoicePageType(), $formData);	
		} else {
			$pageOne['nextPage'] = 1;
			$form = $this->createForm(new ChoicePageType(), $formData);	
		}
		
        return $this->render('StoryViewFrontEndBundle:StoryRouter:home.html.twig', array(
		 		'pageOne' => $pageOne,
				'form' => $form->createView()
				));
    }
	
	
	public function pagesRouterAction(Request $request) {
		
		if ($request->getMethod() == 'POST') {
			
			$storyId = $this->getRequest()->get('storyId');
		
			$repository = $this->get('doctrine_mongodb')
		        ->getManager()
		        ->getRepository('StoryAdminBundle:Story');
				
			$storyObj = $repository->findOneById($storyId);
			$pages = $storyObj->getPages();
			
			 $postData = $request->request->get('pageNav');
			 $currentPage = $postData['next-page'];
			 $pageData = $pages[$currentPage];
			 $pageData['storyId'] = $storyId;
			 $pageBody = $pageData['body'];
			 
			 if (isset($pageData['choice'])) {
				
				 $choices = $pageData['choice'];
				 foreach($choices as $choice) {
				     if(isset($choice['choiceId'])) {
				         $choiceId = $choice['choiceId'];
						 
				     } 
			     }
				 $choices = array('choice1');
				 $formData = array('next-page' => '4', 'decisions' => $choices);
				 $form = $this->createForm(new ChoicePageType(), $formData);
			 } else {
			 	 echo "there is no choice to be made";
				 
			 }
			 return $this->render('StoryViewFrontEndBundle:StoryRouter:pageRouter.html.twig', array(
				'pageData' => $pageData,
				'form' => $form->createView()
		  ));
		}
		return $this->render('StoryViewFrontEndBundle:StoryRouter:error.html.twig');
	}
}
