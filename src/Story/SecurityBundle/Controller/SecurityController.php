<?php

namespace Story\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    public function loginAction()
    {
        return $this->render('StorySecurityBundle:Security:login.html.twig');
    }
	
	public function testAction()
    {
        return $this->render('StorySecurityBundle:Security:login.html.twig');
    }
}
