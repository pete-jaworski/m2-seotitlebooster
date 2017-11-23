<?php
namespace PiotrJaworski\SEOTitleBooster\Helper;
 
/**
 * TitleReplacer Helper
 *
 * @author Piotr Jaworski
 */
class TitleReplacer 
{
    /**
     * @var PiotrJaworski\SEOTitleBooster\Helper\ModuleEnabled
     */
    protected $isEnabled;


    /**
     * Constructor
     * 
     * @param \PiotrJaworski\SEOTitleBooster\Helper\ModuleEnabled $isEnabled
     */
    public function __construct(\PiotrJaworski\SEOTitleBooster\Helper\ModuleEnabled $isEnabled)
    {
        $this->isEnabled = $isEnabled;
    }
    
    
    /**
     * Replaces title with SEO title
     * 
     * @param \Magento\Catalog\Model\Product|\Magento\Catalog\Model\Category $object
     * @return boolean
     */
    public function replace($object)
    {
        if(!$this->isEnabled->enabled()){
            return false;
        }
        
        if($object instanceof \Magento\Catalog\Model\Category){
            return $object->getSeoTitleCatalog();
        } 
        
        if($object instanceof \Magento\Catalog\Model\Product){
            return $object->getSeoTitleProduct();
        } 
        
        return false;
        
    }
    
    
}
