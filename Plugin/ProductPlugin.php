<?php
namespace PiotrJaworski\SEOTitleBooster\Plugin;

/**
 * Plugin for Product Repository
 *
 * @author Piotr Jaworski
 */
class ProductPlugin extends \PiotrJaworski\SEOTitleBooster\Plugin\AbstractPlugin
{
    /**
     * Replaces default title with SEO one
     * 
     * @param \Magento\Catalog\Model\Product $subject
     * @param type $result
     * @return string
     */
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        if(!in_array(\PiotrJaworski\SEOTitleBooster\Model\Config\Target::TARGET_PRODUCT_TITLE, explode(',',$this->scopeConfig->getValue(self::MODULE_CONFIG_NAME, \Magento\Store\Model\ScopeInterface::SCOPE_STORE)))){
            return $result;
        }
        return $this->titleReplacer->replace($subject) ? $this->titleReplacer->replace($subject) : $result;
    }
 
}
