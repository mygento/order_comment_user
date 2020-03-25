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
     * @var \Magento\Backend\Model\Auth\Session
     */
    private $session;

    /**
     * @param \Magento\Backend\Model\Auth\Session $session
     */
    public function __construct(
        \Magento\Backend\Model\Auth\Session $session
    ) {
        $this->session = $session;
    }

    /**
     * @param \Magento\Sales\Model\Order\Status\History $subject
     */
    public function beforeBeforeSave($subject)
    {
        if (!$this->session->isLoggedIn()) {
            return;
        }

        if (!$this->session->getUser()) {
            return;
        }

        $user = $this->session->getUser();
        $subject->setUsername($user->getName());
    }

    /**
     * @param \Magento\Sales\Model\Order\Status\History $subject
     * @param string $result
     *
     * @return string
     */
    public function afterGetStatusLabel($subject, $result)
    {
        if ($subject->getUsername()) {
            return implode('|', [$result, $subject->getUsername()]);
        }

        return $result;
    }
}
