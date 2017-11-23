<?php
namespace PiotrJaworski\SEOTitleBooster\Plugin;

/**
 * Plugin for Category Repository
 *
 * @author Piotr Jaworski
 */
class CategoryPlugin
{
    /**
     * TitleReplacer Helper
     *
     * @var \PiotrJaworski\SEOTitleBooster\Helper\TitleReplacer
     */    
    protected $titleReplacer = null;
    
    
    /**
     * Constructor
     * 
     * @param \PiotrJaworski\SEOTitleBooster\Helper\TitleReplacer $titleReplacer
     */
    public function __construct(\PiotrJaworski\SEOTitleBooster\Helper\TitleReplacer $titleReplacer)
    {
        $this->titleReplacer = $titleReplacer;
    }
    
    
    /**
     * Replaces default title with SEO one
     * 
     * @param \Magento\Catalog\Model\Category $subject
     * @param type $result
     * @return string
     */
    public function afterGetName(\Magento\Catalog\Model\Category $subject, $result)
    {
        return $result.'+';
        return $this->titleReplacer->replace($subject); 
    }
 
}
