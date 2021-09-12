<?php

namespace App\Tests\PropertyBag;

use App\PropertyBag\OrderItemBag;
use PHPUnit\Framework\TestCase;

class OrderItemBagTest extends TestCase
{
    /**
     * @test
     */
    public function getter_setter_order_item_is_success()
    {
        $quantity = 4;
        $unitPrice = 39.95;
        $productId = 3793908;

        $item = new OrderItemBag();
        $item->setQuantity($quantity);
        $item->setUnitPrice($unitPrice);
        $item->setProductId($productId);

        $this->assertEquals($item->getQuantity(), $quantity);
        $this->assertEquals($item->getUnitPrice(), $unitPrice);
        $this->assertEquals($item->getProductId(), $productId);
    }

    /**
     * @test
     */
    public function successfully_get_data_without_setter()
    {

        $item = new OrderItemBag();

        $this->assertEquals($item->getQuantity(), 0);
        $this->assertEquals($item->getUnitPrice(), 0);
        $this->assertEquals($item->getProductId(), 0);
    }
}
