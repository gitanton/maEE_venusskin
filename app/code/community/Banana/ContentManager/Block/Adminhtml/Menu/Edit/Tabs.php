<?php
/**
 * Banana ContentManager Module
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@advancedcontentmanager.com so we can send you a copy immediately.
 *
 * @category	Banana
 * @package		Banana_ContentManager
 * @copyright	Copyright (c) 2014 Banana Content Manager (http://www.advancedcontentmanager.com)
 * @author		Banana Team
 * @license		http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @version		1.2.4
 */

class Banana_ContentManager_Block_Adminhtml_Menu_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('menu_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('contentmanager')->__('Manage Menu'));
    }

    protected function _beforeToHtml()
    {
        $this->addTab('form_section', array(
            'label'     => Mage::helper('contentmanager')->__('General'),
            'title'     => Mage::helper('contentmanager')->__('General'),
            'content'   => $this->getLayout()->createBlock('contentmanager/adminhtml_menu_edit_tab_form')->toHtml(),
        ));
        
        return parent::_beforeToHtml();
    }
}