<?php

namespace StoryView\FrontEndBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ChoicePageType extends AbstractType {
    	
    public function buildForm(FormBuilderInterface $builder, array $options) {
      	
		$builder->add('next-page', 'hidden')
				->add('choices', 'choice', array(
    					'choices' => array('choice1' => '', 'choice2' => '', 
						                   'choice3' => '', 'choice4' => '')))
				->add('continue', 'submit')
	        	->getForm();
    }

    public function getName() {
        return 'pageNav';
    }
}