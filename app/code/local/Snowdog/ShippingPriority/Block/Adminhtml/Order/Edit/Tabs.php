<?php

class Snowdog_ShippingPriority_Block_Adminhtml_Order_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    public function __construct()
    {
        parent::__construct();
        $this->setId("order_tabs");
        $this->setDestElementId("edit_form");
        $this->setTitle(Mage::helper("shippingpriority")->__("Shipping priority Information"));
    }

    protected function _beforeToHtml()
    {
        $this->addTab("form_section", array(
            "label" => Mage::helper("shippingpriority")->__("Shipping priority Information"),
            "title" => Mage::helper("shippingpriority")->__("Shipping priority Information"),
            "content" => $this->getLayout()->createBlock("shippingpriority/adminhtml_order_edit_tab_form")->toHtml(),
        ));
        return parent::_beforeToHtml();
    }
}
