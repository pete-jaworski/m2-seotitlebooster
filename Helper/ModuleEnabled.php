<?php
namespace PiotrJaworski\SEOTitleBooster\Helper;

/**
 * Helper Checks if Module is enabled
 *
 * @author Piotr Jaworski
 */
class ModuleEnabled
{
    /**
     * Holds module enable config name
     */
    const MODULE_CONFIG_NAME = 'piotrjaworski_seotitlebooster/general/seotitlebooster_enabled';

    
    /**
     *
     * @var \Magento\Framework\App\Config\ScopeConfigInterface 
     */
    protected $scopeConfig;
    
    
    /**
     * Constructor 
     * 
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }
    
    
    /**
     * Checks if module is enabled
     * @return bool
     */
    public function enabled()
    {
        return (bool)$this->scopeConfig->getValue(self::MODULE_CONFIG_NAME, \Magento\Store\Model\ScopeInterface::SCOPE_STORE); 
    }
}
