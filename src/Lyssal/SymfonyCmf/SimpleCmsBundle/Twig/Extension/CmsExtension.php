<?php
namespace Lyssal\SymfonyCmf\SimpleCmsBundle\Twig\Extension;

use Symfony\Cmf\Bundle\SimpleCmsBundle\Doctrine\Phpcr\Page;

/**
 * Ajout de filtres Twig.
 * 
 * @author Rémi Leclerc
 */
class CmsExtension extends \Twig_Extension
{
    /**
     * (non-PHPdoc)
     * @see Twig_Extension::getFilters()
     */
    public function getFunctions()
    {
        return array
        (
            'filAriane' => new \Twig_SimpleFunction('filAriane', array($this, 'filAriane'), array('is_safe' => array('html')))
        );
    }

    /**
     * Affiche le fil d'Ariane d'une page.
     * 
     * @param string $html HTML
     * @return string HTML
     */
    public function filAriane(Page $page)
    {
        $filArianeHtml = '<strong class="current">'.$page->getTitle().'</strong>';
        
        $pageParente = $page->getParent();
        while (null !== $pageParente && $pageParente instanceof Page)
        {
            $filArianeHtml = '<a href="'.$pageParente->getPath().'">'.$pageParente->getTitle().'</a> '.$filArianeHtml;
            $pageParente = $pageParente->getParent();
        }
        
        return $filArianeHtml;
    }
    
    /**
     * (non-PHPdoc)
     * @see Twig_ExtensionInterface::getName()
     */
    public function getName()
    {
        return 'lyssal.symfony_cmf.simple_cms.twig.extension.cms';
    }
}
