<?php
namespace Wow\WowBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Wow\WowBundle\Entity\Registration;
use Sonata\AdminBundle\Validator\ErrorElement;

use Knp\Menu\ItemInterface as MenuItemInterface;


class RegistrationAdmin extends Admin
{
	// setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'id'
    );
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('world')
            ->add('login')
            ->add('pwd')
            ->add('pwd2')
            ->add('email')
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('world')
            ->add('login')
            ->add('pwd')
            ->add('pwd2')
            ->add('email')
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('world')
            ->add('login')
            ->add('pwd')
            ->add('pwd2')
            ->add('email')
	        ->add('_action', 'actions', array(
    	            'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;

    }

    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('world')
            ->add('login')
            ->add('pwd')
            ->add('pwd2')
            ->add('email')
        ;
    }

   
}