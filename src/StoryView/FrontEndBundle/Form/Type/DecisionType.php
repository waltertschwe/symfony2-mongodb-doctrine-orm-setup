<?php

namespace StoryView\FrontEndBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use Story\AdminBundle\Document\Story;

class DecisionType extends AbstractType {
	
		
    public function buildForm(FormBuilderInterface $builder, array $options) {
      	
		$builder->add('next-page', 'hidden')
				
				->add('continue', 'submit')
	        	->getForm();
						
	  	$builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function(FormEvent $event) {
                $form = $event->getForm();
				$data = $event->getData(); 
			
				if(isset($data['choices'])) {
					$choices = array();
					$formChoices = $data['choices'];
					
					foreach($formChoices as $choice) {
						$tempArr = array($choice['goto-page-number'] => $choice['text']);
						array_push($choices, $tempArr);	
					}
					$form->add('decisions', 'choice', 
									array('choices' => $choices,
										   'expanded' => true,
					  					   'multiple' => false,
										   'required' => false));
				}
            }
        );
	}
	
    public function getName() {
        return 'pageNav';
    }
	
}