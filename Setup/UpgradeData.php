<?php
namespace PiotrJaworski\SEOTitleBooster\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\SetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class UpgradeData implements UpgradeDataInterface
{
    /**
     *
     * @var Magento\Eav\Setup\EavSetupFactory 
     */
    private $eavSetupFactory;

    
    /**
     * Constructor
     * 
     * @param Magento\Eav\Setup\EavSetupFactory $eavSetupFactory
     */
    public function __construct(EavSetupFactory $eavSetupFactory)    
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }
    
    
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.NPathComplexity)
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        
        $setup->startSetup();
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        
        $eavSetup->removeAttribute(\Magento\Catalog\Model\Product::ENTITY, 'seo_title');
        $eavSetup->removeAttribute(\Magento\Catalog\Model\Category::ENTITY, 'seo_title');
        
        echo "removed";
        
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'seo_title_product',
            [
                'type' => 'text',
                'label' => 'SEO Title',
                'input' => 'text',
                'sort_order' => 2,                
                'group' => 'Display Settings',                        
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
                'visible' => true,
                'required' => false,
                'visible_on_front' => true,                
                'user_defined' => true,
                'searchable' => true,
                'filterable' => false,
                'comparable' => false,
                'used_in_product_listing' => true,
                'unique' => false,
            ]
        );
        
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Category::ENTITY,
            'seo_title_catalog',
            [
                'type' => 'text',
                'label' => 'SEO Title',
                'input' => 'text',
                'sort_order' => 2,                
                'group' => 'Display Settings',                        
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
                'visible' => true,
                'required' => false,
                'visible_on_front' => true,                
                'user_defined' => true,
                'searchable' => true,
                'filterable' => false,
                'comparable' => false,
                'used_in_product_listing' => true,
                'unique' => false,
            ]
        );  
        
        $setup->endSetup();
 
    }    
    
}
