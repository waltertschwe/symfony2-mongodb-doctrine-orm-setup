<?php

namespace Story\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PageType extends AbstractType {
    	
    public function buildForm(FormBuilderInterface $builder, array $options) {
      	
		$builder->add('pageName', 'text')
			->add('pageNumber', 'integer', array('required' => true, 'label' => 'integer text field'))
			->add('body', 'text')
			->add('Is there a decision to be made on this page?', 'choice', array(
    			'choices'   => array('n' => 'No', 'y' => 'Yes'),
    			'required'  => false))
			->add('save', 'submit')
	        ->getForm();
    }

    public function getName() {
        return 'pageName';
    }
}