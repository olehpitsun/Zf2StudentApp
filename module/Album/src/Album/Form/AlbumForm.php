<?php
namespace Album\Form;
use Zend\Form\Form;
class AlbumForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('album');
        $this->setAttributes(array(
            'method', 'post',
            'data-toggle','validator'
            ));
        //$this->setAttribute('data-toggle','validator');




        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type'  => 'hidden',
            ),
        ));
        $this->add(array(
            'name' => 'artist',
            'attributes' => array(
                'type'  => 'text',
                'class' => 'form-control',
                'pattern' => '^[_A15,-z0-9]{1,}$',
                'maxlength' => 15,
                'data-minlength' => "6",

            ),
            'options' => array(
                'label' => 'Автор',
                'class' => 'control-label',
                'for' => 'artist'

            ),
        ));
        $this->add(array(
            'name' => 'title',
            'attributes' => array(
                'type'  => 'text',
                'class' => 'form-control',
                'pattern' => '^[_A-z0-9]{1,}$',
                'maxlength' => 15,
                'data-minlength' => "6",


            ),
            'options' => array(
                'label' => 'Назва',
                'class' => 'control-label',
                'for' => 'title'



            ),
        ));
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'id' => 'submitbutton',
                'class' => 'btn btn-primary',
            ),
        ));
    }
}