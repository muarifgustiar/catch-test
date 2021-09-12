<?php

namespace App\PropertyBag;

use Carbon\Carbon;
use RuntimeException;

class OrderBag
{
    protected int $orderId = 0;
    protected ?Carbon $orderCreatedAt = null;
    protected array $orderItems = [];
    protected int $shipping_price = 0;
    protected array $discounts = [];

    public function __construct()
    {
    }
    public function setOrderId(int $orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function getOrderId(): int
    {
        return $this->orderId;
    }

    public function setOrderCreatedAt(Carbon $orderCreatedAt)
    {
        $this->orderCreatedAt = $orderCreatedAt;
        return $this;
    }

    public function getOrderCreatedAt(): ?Carbon
    {
        return $this->orderCreatedAt;
    }

    public function setOrderItem(array $orderItems)
    {
        foreach ($orderItems as $key => $value) {
            if (!$value instanceof OrderItemBag) {
                throw new RuntimeException();
            }
        }
        $this->orderItems = $orderItems;
        return $this;
    }
    public function getOrderItems(): array
    {
        return $this->orderItems;
    }
    public function setDiscount(array $discounts)
    {
        foreach ($discounts as $key => $value) {
            if (!$value instanceof DiscountBag) {
                throw new RuntimeException();
            }
        }
        $this->discounts = $discounts;
        return $this;
    }
    public function getDiscounts(): array
    {
        return $this->discounts;
    }
}
