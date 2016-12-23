<?php
/**
 *
 * @category   Mygento
 * @package    Mygento_Ordercommentuser
 * @copyright  2016 NKS LLC. (http://www.mygento.ru)
 */
$this->startSetup();
$installer = new Mage_Sales_Model_Mysql4_Setup('core_setup');
$installer->addAttribute('order_status_history', 'username');
$this->endSetup();
