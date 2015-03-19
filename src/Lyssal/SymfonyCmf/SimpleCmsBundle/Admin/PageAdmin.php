<?php
namespace Lyssal\SymfonyCmf\SimpleCmsBundle\Admin;

use Symfony\Cmf\Bundle\SimpleCmsBundle\Admin\PageAdmin as BasePageAdmin;
use Sonata\AdminBundle\Form\FormMapper;

class PageAdmin extends BasePageAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        parent::configureFormFields($formMapper);

        if ($this->getConfigurationPool()->getContainer()->get('form.registry')->hasType('ckeditor'))
        {
            $formMapper
                ->remove('body')
                ->add(
                    'body',
                    'ckeditor'
                )
            ;
        }
    }
}
