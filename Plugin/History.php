<?php

/**
 * @author Mygento Team
 * @copyright 2015-2020 Mygento (https://www.mygento.ru)
 * @package Mygento_OrderCommentUser
 */

namespace Mygento\OrderCommentUser\Plugin;

class History
{
    /**
     * @param \Magento\Sales\Model\Order\Status\History $subject
     */
    public function beforeBeforeSave($subject)
    {
        $subject->setUsername('banan');
    }
}
