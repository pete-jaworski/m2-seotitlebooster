<?php
namespace PiotrJaworski\SEOTitleBooster\Model\Config;

/**
 * Config for Target
 *
 * @author Piotr Jaworski
 */
class Target implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Target option
     */     
    const TARGET_PRODUCT_TITLE = 'catalog_product_view';

    /**
     * Target option
     */     
    const TARGET_CATEGORY_TITLE = 'catalog_category_view';
  
    
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('label' => 'Product Titles', 'value' => self::TARGET_PRODUCT_TITLE),
            array('label' => 'Category Titles', 'value' => self::TARGET_CATEGORY_TITLE)
        );
    }    
}
