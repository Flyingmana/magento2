<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */

require __DIR__ . '/../../../Magento/Customer/_files/customer.php';
require __DIR__ . '/../../../Magento/Catalog/_files/product_simple.php';

$price = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\ProductAlert\Model\Price');
$price->setCustomerId(
    $customer->getId()
)->setProductId(
    $product->getId()
)->setPrice(
    $product->getPrice()+1
)->setWebsiteId(
    1
);
$price->save();

$stock = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\ProductAlert\Model\Stock');
$stock->setCustomerId(
    $customer->getId()
)->setProductId(
    $product->getId()
)->setWebsiteId(
    1
);
$stock->save();
