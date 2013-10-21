<?php

namespace Story\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PageType extends AbstractType {
    	
    public function buildForm(FormBuilderInterface $builder, array $options) {
      	
		$builder->add('pageName', 'text', array('required' => true, 'label' => 'Page Name'))
			->add('pageNumber', 'integer', array('required' => true, 'read_only' => 'true','label' => 'Page Number'))
			->add('body', 'textarea', array('label' => 'Page Body', 'attr' => array('class' => 'ckeditor')))
			->add('decision', 'choice', array(
    			'choices' => array('n' => 'No', 'y' => 'Yes')))
			->add('choice1', 'text', array('required' => false, 'max_length' => '255', 'label' => 'Choice #1',
					'attr' => array('size' => '100')))
			->add('choice2', 'text', array('required' => false, 'label' => 'Choice #2',
					'attr' => array('size' => '100')))
			->add('choice3', 'text', array('required' => false, 'label' => 'Choice #3',
					'attr' => array('size' => '100')))
			->add('choice4', 'text', array('required' => false, 'label' => 'Choice #4',
					'attr' => array('size' => '100')))
			->add('save', 'submit')
	        ->getForm();
    }

    public function getName() {
        return 'pageName';
    }
}