<?php
namespace Lyssal\SymfonyCmf\SimpleCmsBundle;

use Symfony\Cmf\Bundle\SimpleCmsBundle\CmfSimpleCmsBundle;

class LyssalSymfonyCmfSimpleCmsBundle extends CmfSimpleCmsBundle
{
    /**
     * (non-PHPdoc)
     * @see \Symfony\Component\HttpKernel\Bundle\Bundle::getParent()
     */
    public function getParent()
    {
        return 'CmfSimpleCmsBundle';
    }
}
