<?php

namespace CoEdition\Vendor\Observer;

use Magento\Framework\Event;

class OrderStatusObserver implements Event\ObserverInterface
{
    public function execute(Event\Observer $observer) {
        // push order status
    }
}