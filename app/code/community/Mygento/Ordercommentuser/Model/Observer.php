<?php

/**
 *
 * @category   Mygento
 * @package    Mygento_Ordercommentuser
 * @copyright  Copyright © 2015 NKS LLC. (http://www.mygento.ru)
 */
class Mygento_Ordercommentuser_Model_Observer
{

    public function orderStatusHistorySaveBefore($observer)
    {
        $session = Mage::getSingleton('admin/session');
        if ($session->isLoggedIn()) { //only for login admin user
            $user = $session->getUser();
            $history = $observer->getEvent()->getStatusHistory();
            if (!$history->getId()) { //only for new entry
                $history->setData('username', $user->getUsername());
            }
        }
    }
}
