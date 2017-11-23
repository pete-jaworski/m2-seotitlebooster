<?php
namespace PiotrJaworski\SEOTitleBooster\Plugin;

/**
 * Plugin for Product Repository
 *
 * @author Piotr Jaworski
 */
class ProductPlugin
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
     * @param \Magento\Catalog\Model\Product $subject
     * @param type $result
     * @return string
     */
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $this->titleReplacer->replace($subject) ? $this->titleReplacer->replace($subject) : $result;
    }
 
}
