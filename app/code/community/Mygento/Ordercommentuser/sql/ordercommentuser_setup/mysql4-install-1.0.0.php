<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$this->startSetup();
$installer = new Mage_Sales_Model_Mysql4_Setup('core_setup');
$installer->addAttribute('order_status_history', 'username');
$this->endSetup();