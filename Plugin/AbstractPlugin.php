<?php
namespace PiotrJaworski\SEOTitleBooster\Plugin;

/**
 * Abstract class for Plugin
 *
 * @author Piotr Jaworski
 */
abstract class AbstractPlugin
{
    /**
     * Holds object type
     */
    protected $type = '';
    
    
    /**
     * Hold module config name
     */
    const MODULE_CONFIG_NAME = 'piotrjaworski_seotitlebooster/general/seotitlebooster_target';

    
    /**
     * TitleReplacer Helper
     *
     * @var \PiotrJaworski\SEOTitleBooster\Helper\TitleReplacer
     */    
    protected $titleReplacer = null;


    /**
     *
     * @var \Magento\Framework\App\Config\ScopeConfigInterface 
     */
    protected $scopeConfig;
    
    
    /**
     * Constructor
     * 
     * @param \PiotrJaworski\SEOTitleBooster\Helper\TitleReplacer $titleReplacer
     */
    public function __construct(
            \PiotrJaworski\SEOTitleBooster\Helper\TitleReplacer $titleReplacer,
            \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    )
    {
        $this->titleReplacer = $titleReplacer;
        $this->scopeConfig = $scopeConfig;
    }    
     
}
