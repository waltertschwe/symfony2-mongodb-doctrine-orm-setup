<?php

namespace StoryView\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StoryRouterController extends Controller
{
    public function indexAction()
    {
        return $this->render('StoryViewFrontEndBundle:StoryRouter:index.html.twig');
    }
}
