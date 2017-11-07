<?php
namespace PiotrJaworski\PiotrJaworski_SEOTitleBooster\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Description of InstallData
 *
 * @codeCoverageIgnore
 * @author Piotr Jaworski
 */
class InstallData implements InstallDataInterface
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
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */    
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        
        $setup->startSetup();
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);        
     
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'seo_title',
            [
                'type' => 'text',
                'label' => 'SEO Title',
                'input' => 'text',
                'sort_order' => 2,                
                'group' => 'General Information',                        
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
            'seo_title',
            [
                'type' => 'text',
                'label' => 'SEO Title',
                'input' => 'text',
                'sort_order' => 2,                
                'group' => 'General Information',                        
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

