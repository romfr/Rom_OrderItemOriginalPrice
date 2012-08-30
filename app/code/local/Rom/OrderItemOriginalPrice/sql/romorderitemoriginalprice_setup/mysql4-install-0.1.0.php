<?php
$installer = $this;

$installer->startSetup();

$installer->addAttribute(
    'quote_item', 
    'real_original_price', 
    array(
        'type' => 'decimal', /* varchar, text, decimal, datetime */
        'grid' => false /* or true if you wan't use this attribute on orders grid page */
    )
);

$installer->addAttribute(
    'order_item', 
    'real_original_price', 
    array(
        'type' => 'decimal', /* varchar, text, decimal, datetime */
        'grid' => false /* or true if you wan't use this attribute on orders grid page */
    )
);

$installer->endSetup(); 