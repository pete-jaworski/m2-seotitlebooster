<?php
namespace PiotrJaworski\SEOTitleBooster\Helper;
 
/**
 * TitleReplacer Helper
 *
 * @author Piotr Jaworski
 */
class TitleReplacer 
{
    //put your code here
    
    public function replace($object)
    {
        
        return '---';
        if($object instanceof \Magento\Catalog\Model\Category){
            return $object->getName()."**";
        } 
        
        if($object instanceof \Magento\Catalog\Model\Product){
            return $object->getName()."++";
        } 
        
    }
    
    
}
