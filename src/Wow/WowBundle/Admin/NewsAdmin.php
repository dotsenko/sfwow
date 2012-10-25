<?php
namespace Wow\WowBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Wow\WowBundle\Entity\News;
use Sonata\AdminBundle\Validator\ErrorElement;

use Knp\Menu\ItemInterface as MenuItemInterface;


class NewsAdmin extends Admin
{
	// setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'id'
    );
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            
            ->add('title')
            ->add('description')
            ->add('date')
            ->add('image')
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            
            ->add('title')
            ->add('description')
            ->add('date')
            ->add('image')
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('title')
            ->add('description')
            ->add('date')
            ->add('image')
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
            ->add('title')
            ->add('description')
            ->add('date')
            ->add('image')
        ;
    }

   
}