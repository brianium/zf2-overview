<?php
namespace Application\Form;

use Zend\Form\Form;
use Zend\InputFilter\Factory;
use Zend\InputFilter\InputFilter;
use Zend\Validator\NotEmpty;

class TweetSearchForm extends Form
{
    public function __construct($name = null, $options = [])
    {
        parent::__construct($name, $options);
        $this->addElements();
        $this->setInputFilter($this->createInputFilter());
    }

    protected function addElements()
    {
        $this->add(array(
            'name' => 'search',
            'attributes' => array(
                'type' => 'text',
                'placeholder' => '#zf2'
            ),
            'options' => array(
                'label' => 'Search text: '
            )
        ));
    }

    protected function createInputFilter()
    {
        $filter = new InputFilter();
        $factory = new Factory();
        $filter->add($factory->createInput(array(
            'name' => 'search',
            'required' => 'true',
            'validators' => array(
                array(
                    'name' => 'NotEmpty',
                    'options' => array(
                        'messages' => array(
                            NotEmpty::IS_EMPTY => 'Search text cant be empty'
                        )
                    )
                )
            )
        )));
        return $filter;
    }
} 