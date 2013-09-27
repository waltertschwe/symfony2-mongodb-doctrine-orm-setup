<?php

namespace Story\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class StoryType extends AbstractType {
    	
    public function buildForm(FormBuilderInterface $builder, array $options) {
      	
		$builder->add('storyName', 'text', array('max_length' => '45', 'attr' => array('size' => '45')))
			->add('author', 'text')
			->add('description', 'textarea')
			->add('save', 'submit')
	        ->getForm();
    }

    public function getName() {
        return 'storyName';
    }
}