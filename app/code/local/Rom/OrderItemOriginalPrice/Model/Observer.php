<?php 
class Rom_OrderItemOriginalPrice_Model_Observer
{
    public function romExtendQuoteItem($observer)
    {
        $event = $observer->getEvent();
        $quote_item = $event->getQuoteItem();
        $quote_item->setRealOriginalPrice($quote_item->getProduct()->getPrice());
    }

    public function romExtendOrderItem($observer)
    {
        $event = $observer->getEvent();
        $order_item = $event->getOrderItem();
        $order_item->setRealOriginalPrice($event->getItem()->getRealOriginalPrice());
    }
}