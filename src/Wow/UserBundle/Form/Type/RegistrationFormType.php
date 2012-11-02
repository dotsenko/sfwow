<?php

namespace Wow\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilder;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('world', 'choice', array(
        'choices' => array(
                      'logon'  => 'logon.wowcircle.com [x5,x10,x15,x20,x25,Cata x25,Cata x100,x300]',
                      'logon2' => 'logon2.wowcircle.com [Cata x5,x500,x100,x30,Fun]',
                      'logon3' => 'logon3.wowcircle.com [x1,Cata x1,x3,x10-x20,x50,Cata Fun,Transfer,Crazy]',
                      'logon4' => 'logon4.wowcircle.com [Classic x5,TBC x100,TBC Battle]',
                    )));

    $builder->add('captcha', 'captcha',array(
        'width' => 100,
        'height' => 50,
        'length' => 4,
        'invalid_message' => 'Не верный код проверки',
     )); 
    }


    public function getWorld()
    {
        return 'wow_user_registration';
    }
}