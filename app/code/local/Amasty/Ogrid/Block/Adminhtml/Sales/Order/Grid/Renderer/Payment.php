<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2016 Amasty (https://www.amasty.com)
 * @package Amasty_Ogrid
 */
class Amasty_Ogrid_Block_Adminhtml_Sales_Order_Grid_Renderer_Payment extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        $index = $this->getColumn()->getIndex();
        $method = $row->getData($index);

        $instance = null;
        try{
            $instance = Mage::helper('payment')->getMethodInstance($method);
            return $instance ? $instance->getTitle() : '-';
        } catch (Exception $e){
            return $method;
        }


    }
}