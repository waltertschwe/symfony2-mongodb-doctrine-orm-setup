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
			$form = $this->createForm(new SimplePageType(), $formData);	
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
			 $postData = $request->request->get('pageNav');
			 $currentPage = $postData['next-page'];
			 $pageData = $pages[$currentPage];
			 $pageBody = $pageData['body'];
			 
			 if (isset($pageData['choice'])) {
			 	 echo "there is a choice to be made";
				 $formData = array('next-page' => '4',
				 		'choices' => array('choice1' => 'this is choice1'));
				 $choices = $pageData['choice'];
				 foreach($choices as $choice) {
				     if(isset($choice['choiceId'])) {
				         $choiceId = $choice['choiceId'];
						 //$formData['choices']['choice'.$choiceId] = 'hello';
						 
				     } 
			     }
				 
				 $form = $this->createForm(new ChoicePageType(), $formData);
			 } else {
			 	 echo "there is no choice to be made";
				 
			 }
			 
			 
			 var_dump($pageData);
			 exit();
			//$form->bindRequest($request);
		}
	}
	
}
