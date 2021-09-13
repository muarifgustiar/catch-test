<?php

namespace App\Tests\PropertyBag;

use App\PropertyBag\DiscountBag;
use App\PropertyBag\OrderBag;
use App\PropertyBag\OrderItemBag;
use Carbon\Carbon;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class OrderBagTest extends TestCase
{
    /**
     * @test
     */
    public function getter_setter_order_successfully_works()
    {
        $orderId = 23;
        $orderCreatedAt = Carbon::now();
        $items = [
            new OrderItemBag,
            new OrderItemBag
        ];

        $orderBag = new OrderBag();
        $orderBag->setOrderId($orderId);
        $orderBag->setOrderCreatedAt($orderCreatedAt);
        $orderBag->setOrderItem($items);

        $this->assertSame($orderId, $orderBag->getOrderId());
        $this->assertInstanceOf(Carbon::class, $orderBag->getOrderCreatedAt());
        foreach ($orderBag->getOrderItems() as $key => $value) {
            $this->assertInstanceOf(OrderItemBag::class, $value);
        }
    }

    /**
     * @test
     */
    public function order_without_setter_successfully_works()
    {
        $orderBag = new OrderBag();
        $this->assertSame(0, $orderBag->getOrderId());
        $this->assertNull($orderBag->getOrderCreatedAt());
        $this->assertSame([], $orderBag->getOrderItems());
    }

    /**
     * @test
     */
    public function order_will_throw_runtime_exception_when_value_is_not_array_of_order_item_bag()
    {
        $this->expectException(RuntimeException::class);
        $items = [
            new OrderItemBag,
            2,
            'test'
        ];

        $orderBag = new OrderBag();

        $orderBag->setOrderItem($items);
        $orderBag->getOrderItems();
    }
    /**
     * @test
     */
    public function order_will_throw_runtime_exception_when_value_is_not_array_of_discount_bag()
    {
        $this->expectException(RuntimeException::class);
        $discount = [
            new DiscountBag,
            2,
            'test'
        ];

        $orderBag = new OrderBag();

        $orderBag->setDiscount($discount);
        $orderBag->getDiscounts();
    }
}
