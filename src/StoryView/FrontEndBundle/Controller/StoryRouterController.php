<?php

namespace StoryView\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class StoryRouterController extends Controller
{
    public function storyHomeAction(Request $request)
    {
    	
		$repository = $this->get('doctrine_mongodb')
	        ->getManager()
	        ->getRepository('StoryAdminBundle:Story');
			
		$storyId = $this->getRequest()->get('storyId');
		
		$storyObj = $repository->findOneById($storyId);
		$storyName = $storyObj->getStoryName();
		
		$pages = $storyObj->getPages();
		
		
		$pageOne = $pages[0];
		$pageOne['storyName'] = $storyName;
		
        return $this->render('StoryViewFrontEndBundle:StoryRouter:index.html.twig', array(
		 		'pageOne' => $pageOne));
	
    }
	
}
