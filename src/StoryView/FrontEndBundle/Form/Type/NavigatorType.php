<?php

namespace StoryView\FrontEndBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PageNavigatoryType extends AbstractType {
    	
    public function buildForm(FormBuilderInterface $builder, array $options) {
      	
		$builder->add('next-page', 'hidden')
			->add('continue', 'submit')
	        ->getForm();
    }

    public function getName() {
        return 'next-page';
    }
}