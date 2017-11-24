<?php
namespace PiotrJaworski\SEOTitleBooster\Plugin;

/**
 * Plugin for Category Repository
 *
 * @author Piotr Jaworski
 */
class CategoryPlugin extends \PiotrJaworski\SEOTitleBooster\Plugin\AbstractPlugin
{
    /**
     * Replaces default title with SEO one
     * 
     * @param \Magento\Catalog\Model\Category $subject
     * @param type $result
     * @return string
     */
    public function afterGetName(\Magento\Catalog\Model\Category $subject, $result)
    {
        if(!in_array(\PiotrJaworski\SEOTitleBooster\Model\Config\Target::TARGET_CATEGORY_TITLE, explode(',',$this->scopeConfig->getValue(self::MODULE_CONFIG_NAME, \Magento\Store\Model\ScopeInterface::SCOPE_STORE)))){
            return $result;
        }
        
        return $this->titleReplacer->replace($subject) ? $this->titleReplacer->replace($subject) : $result;
    }
 
}
