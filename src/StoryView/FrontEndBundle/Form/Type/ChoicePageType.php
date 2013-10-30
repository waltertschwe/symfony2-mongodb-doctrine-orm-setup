<?php

namespace StoryView\FrontEndBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class ChoicePageType extends AbstractType {
		
    public function buildForm(FormBuilderInterface $builder, array $options) {
      	
		$builder->add('next-page', 'hidden')
				->add('decisions', 'choice', 
									array('choices' => array('choice1' => 'asdf', 'choice2' => '', 
						                   'choice3' => '', 'choice4' => ''),
										   'expanded' => true,
					  					   'multiple' => true,
										   'required' => false)
					   )
				->add('continue', 'submit')
	        	->getForm();
				
				
				
		 $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function(FormEvent $event) {
                $form = $event->getForm();   
                $data = $event->getData();
				var_dump($data);
                $form->add('test-event-listener', 'hidden' );
            }
        );
    }
	
    public function getName() {
        return 'pageNav';
    }
	
}