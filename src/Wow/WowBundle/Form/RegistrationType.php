<?php

namespace Wow\WowBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
    	$builder->add('world', 'choice', array(
    	'choices' => array(
        			  'logon'  => 'logon.wowcircle.com [x5,x10,x15,x20,x25,Cata x25,Cata x100,x300]',
   					  'logon2' => 'logon2.wowcircle.com [Cata x5,x500,x100,x30,Fun]',
   					  'logon3' => 'logon3.wowcircle.com [x1,Cata x1,x3,x10-x20,x50,Cata Fun,Transfer,Crazy]',
   					  'logon4' => 'logon4.wowcircle.com [Classic x5,TBC x100,TBC Battle]',
   					)));
        $builder->add('login');
        $builder->add('pwd','password');
        $builder->add('pwd2','password');
        $builder->add('email','email');
        $builder->add('captcha', 'captcha',array('invalid_message'=>'Неправильный код проверки'));
    }

    public function getName()
    {
        return 'registration';
    }
}