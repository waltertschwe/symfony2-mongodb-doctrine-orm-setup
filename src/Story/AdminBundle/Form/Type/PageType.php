<?php

namespace Story\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PageType extends AbstractType {
    	
    public function buildForm(FormBuilderInterface $builder, array $options) {
      	
		$builder->add('pageName', 'text', array('required' => true, 'label' => 'Page Name'))
			->add('pageNumber', 'integer', array('required' => true, 'label' => 'Page Number'))
			->add('body', 'textarea', array('label' => 'Page Body', 'attr' => array('class' => 'ckeditor')))
			->add('decision', 'choice', array(
    			'choices' => array('n' => 'No', 'y' => 'Yes')))
			->add('save', 'submit')
	        ->getForm();
    }

    public function getName() {
        return 'pageName';
    }
}